<?php
include('db.php');

// Insert Product
if(isset($_POST['add_product'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $cat_id = $_POST['category_id'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO products (category_id, name, price, description) VALUES ('$cat_id', '$name', '$price', '$desc')";
    if($conn->query($sql)){
        header("Location: admin.php");
    }
}

// Delete Product
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: admin.php");
}
?>
