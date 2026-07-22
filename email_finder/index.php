<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Validator</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: auto; background: #fff; border: 1px solid #ccc; padding: 20px; border-radius: 5px; }
        h2 { text-align: center; }
        form { margin-top: 20px; }
        input[type="file"] { padding: 10px; }
        input[type="submit"] { padding: 10px 15px; background: #337ab7; color: #fff; border: none; border-radius: 3px; cursor: pointer; }
        .results { margin-top: 20px; border-top: 1px solid #eee; padding-top: 20px; }
        .results p { margin: 5px 0; }
    </style>
</head>
<body>

<div class="container">
    <h2>Email List Validator</h2>

    <hr>
    <h4>Test a Single Email</h4>
    <form action="process.php" method="post">
        <input type="email" name="single_email" placeholder="Enter email to validate" required style="padding: 10px; width: 70%;">
        <input type="submit" value="Validate" name="submit_single">
    </form>
    <hr>

    <h4>Upload a File</h4>
    <p>Upload a file (.txt, .csv) with one email per line.</p>
    <form action="process.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="emailFile" id="emailFile" required>
        <input type="submit" value="Validate Emails" name="submit">
    </form>

    <?php
    if (isset($_SESSION['results'])) {
        $results = $_SESSION['results'];
        echo '<div class="results">';
        echo '<h3>Validation Results</h3>';
        if (isset($results['error'])) {
            echo '<p style="color: red;">' . htmlspecialchars($results['error']) . '</p>';
        } elseif (isset($results['single_email_result'])) {
            // Display single email result
            $email = htmlspecialchars($results['email']);
            if ($results['single_email_result'] === 'valid') {
                echo '<p>The email <strong style="color: green;">' . $email . '</strong> is valid and has been saved!</p>';
            } else {
                echo '<p>The email <strong style="color: red;">' . $email . '</strong> is invalid.</p>';
            }
        } else {
            // Display batch result
            echo '<p>Total Emails Processed: ' . $results['total'] . '</p>';
            echo '<p style="color: green;">Valid Emails (Saved): ' . $results['valid_count'] . '</p>';
            echo '<p style="color: red;">Invalid Emails: ' . $results['invalid_count'] . '</p>';
            if ($results['total'] > 0) {
                $valid_percentage = round(($results['valid_count'] / $results['total']) * 100, 2);
                echo '<p>Valid Percentage: ' . $valid_percentage . '%</p>';
            }
            
            if (!empty($results['invalid_emails'])) {
                echo '<h4>Invalid Emails List:</h4>';
                echo '<ul style="max-height: 150px; overflow-y: auto; border: 1px solid #ddd; padding: 10px;">';
                foreach ($results['invalid_emails'] as $email) {
                    echo '<li>' . htmlspecialchars($email) . '</li>';
                }
                echo '</ul>';
            }
        }
        
        // Display Debug Information if available
        if (isset($results['debug_info'])) {
            echo '<h4>Debug Information:</h4>';
            echo '<pre style="background: #eee; padding: 10px; border-radius: 3px; white-space: pre-wrap; word-wrap: break-word;">';
            print_r($results['debug_info']);
            echo '</pre>';
        }

        echo '</div>';
        unset($_SESSION['results']); // Clear results after displaying
    }
    ?>
</div>

</body>
</html>