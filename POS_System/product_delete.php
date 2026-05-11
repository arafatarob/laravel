<?php
require_once './config/database.php';

if (!isset($_GET['id'])) {
    echo "<script>window.location.href = 'products.php';</script>";
    exit;
}

$product_id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
$stmt->bind_param("i", $product_id);

if ($stmt->execute()) {
    echo "<script>alert('Product deleted successfully!'); window.location.href = 'products.php';</script>";
} else {
    echo "<script>alert('Error deleting product.'); window.location.href = 'products.php';</script>";
}
?>