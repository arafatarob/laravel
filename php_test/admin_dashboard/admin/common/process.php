<?php
include_once('../../common/db.php'); // রুট ফোল্ডারের কানেকশন ফাইল ব্যবহার করা হচ্ছে

// Insert Product
if(isset($_POST['add_product'])){
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);
    $stock = $conn->real_escape_string($_POST['stock']);
    $cat_id = $conn->real_escape_string($_POST['category_id']);
    $desc = $conn->real_escape_string($_POST['description']);
    $imageName = '';

    if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // মেইন প্রজেক্ট ফোল্ডারে থাকা image ফোল্ডারটির পাথ (process.php থেকে ২ ধাপ উপরে)
        $uploadDir = realpath(dirname(__FILE__) . '/../../') . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR;

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $allowedExt = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExt = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        if (in_array($fileExt, $allowedExt)) {
            $safeName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
            $safeName = preg_replace('/[^a-zA-Z0-9_-]+/', '_', $safeName);
            $imageName = $safeName . '_' . time() . '.' . $fileExt;
            $targetPath = $uploadDir . $imageName;
            
            if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                die("Error: ইমেজ ফোল্ডারে সেভ হচ্ছে না। পাথ চেক করুন: $uploadDir");
            }
        } else {
            die("Error: শুধুমাত্র jpg, jpeg, png অথবা gif ফাইল আপলোড করুন।");
        }
    }

    $sql = "INSERT INTO products (category_id, name, price, description, image, stock) VALUES ('$cat_id', '$name', '$price', '$desc', '$imageName', '$stock')";
    if($conn->query($sql)){
        header("Location: ../add_product.php");
        exit();
    } else {
        die("Database Error: " . $conn->error);
    }
}

// Delete Product
if(isset($_GET['delete'])){
    $del_id = intval($_GET['delete']);
    $uploadDir = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR;
    
    $result = $conn->query("SELECT image FROM products WHERE id=$del_id");
    if ($result && $row = $result->fetch_assoc()) {
        if (!empty($row['image'])) {
            $filePath = $uploadDir . $row['image'];
            if (file_exists($filePath)) {
                @unlink($filePath);
            }
        }
    }
    $conn->query("DELETE FROM products WHERE id=$del_id");
    header("Location: ../add_product.php");
    exit();
}
?>
