<?php
session_start();
include 'db.php'; // Include database connection

// --- Emailable API Integration with Debugging ---
function validate_email_with_api($email, &$debug_info = null) {
    $api_key = 'YOUR_EMAILABLE_API_KEY'; // <-- অনুগ্রহ করে এখানে আপনার Emailable API কী বসান

    // 1. Check if the API key has been changed
    if ($api_key == 'YOUR_EMAILABLE_API_KEY' || empty($api_key)) {
        $debug_info = ['error' => ['message' => "API Key not set. Please add your Emailable API key in process.php"]];
        return false;
    }

    $url = 'https://api.emailable.com/v1/verify?email=' . urlencode($email) . '&api_key=' . $api_key;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);

    // 2. Check for cURL errors (e.g., network issues)
    if (curl_errno($ch)) {
        $debug_info = ['error' => ['message' => 'cURL Error: ' . curl_error($ch)]];
        curl_close($ch);
        return false;
    }
    curl_close($ch);

    $data = json_decode($response, true);
    $debug_info = $data; // Store the full API response for debugging

    // 3. Check for API-level errors (e.g., invalid key, no credits)
    if (isset($data['error'])) {
        return false;
    }

    // 4. Check if the email state is 'deliverable'
    if (isset($data['state']) && $data['state'] == 'deliverable') {
        return true;
    }

    return false;
}

// Handle single email validation
if (isset($_POST["submit_single"])) {
    $email = trim($_POST['single_email']);
    $result = 'invalid';
    $debug_info = null;

    if (!empty($email) && validate_email_with_api($email, $debug_info)) {
        $stmt = $conn->prepare("INSERT INTO valid_emails (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        if (@$stmt->execute() || $conn->errno == 1062) {
            $result = 'valid';
        }
        $stmt->close();
    }

    $_SESSION['results'] = [
        'single_email_result' => $result,
        'email' => $email,
        'debug_info' => $debug_info // Pass debug info to the front-end
    ];

    $conn->close();
    header("Location: index.php");
    exit();
}


// Handle file upload validation
if (isset($_POST["submit"])) {
    $valid_count = 0;
    $invalid_emails = [];
    $debug_info_first_fail = null; // Store debug info for the first failed email

    if (isset($_FILES["emailFile"]) && $_FILES["emailFile"]["error"] == 0) {
        $filename = $_FILES["emailFile"]["tmp_name"];
        $file_content = file_get_contents($filename);
        $emails = preg_split('/\\s+/', $file_content, -1, PREG_SPLIT_NO_EMPTY);
        $total_emails = count($emails);
        $stmt = $conn->prepare("INSERT INTO valid_emails (email) VALUES (?)");

        foreach ($emails as $email) {
            $email = trim($email);
            $current_debug_info = null;
            if (validate_email_with_api($email, $current_debug_info)) {
                $stmt->bind_param("s", $email);
                if (@$stmt->execute()) {
                    $valid_count++;
                }
            } else {
                $invalid_emails[] = $email;
                // Save the debug info for the first failure to avoid clutter
                if ($debug_info_first_fail === null) {
                    $debug_info_first_fail = $current_debug_info;
                }
            }
        }
        $stmt->close();

        $_SESSION['results'] = [
            'total' => $total_emails,
            'valid_count' => $valid_count,
            'invalid_count' => $total_emails - $valid_count,
            'invalid_emails' => $invalid_emails,
            'debug_info' => $debug_info_first_fail // Pass debug info to the front-end
        ];

    } else {
        $_SESSION['results'] = ['error' => 'File upload failed. Please try again.'];
    }

    $conn->close();
    header("Location: index.php");
    exit();
}
?>