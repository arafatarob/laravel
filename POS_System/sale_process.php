<?php
session_start();
require_once './config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = $_POST['customer_id'];
    $cart_data = json_decode($_POST['cart_data'], true);
    $user_id = $_SESSION['user_id'];
    $total_amount = 0;

    if (empty($cart_data)) {
        die("Cart is empty.");
    }

    // Calculate total amount
    foreach ($cart_data as $product_id => $item) {
        $total_amount += $item['price'] * $item['quantity'];
    }

    $conn->begin_transaction();

    try {
        // Insert into sales table
        $stmt = $conn->prepare("INSERT INTO sales (customer_id, user_id, total_amount, status) VALUES (?, ?, ?, 'Completed')");
        $stmt->bind_param("iid", $customer_id, $user_id, $total_amount);
        $stmt->execute();
        $sale_id = $stmt->insert_id;

        // Insert into sale_items table and update product stock
        $sale_item_stmt = $conn->prepare("INSERT INTO sale_items (sale_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
        $update_stock_stmt = $conn->prepare("UPDATE products SET stock = stock - ? WHERE id = ?");

        foreach ($cart_data as $product_id => $item) {
            $sale_item_stmt->bind_param("iiid", $sale_id, $product_id, $item['quantity'], $item['price']);
            $sale_item_stmt->execute();

            $update_stock_stmt->bind_param("ii", $item['quantity'], $product_id);
            $update_stock_stmt->execute();
        }

        $conn->commit();
        echo "<script>alert('Sale completed successfully!'); window.location.href = 'sale_view.php?id=$sale_id';</script>";

    } catch (Exception $e) {
        $conn->rollback();
        echo "Failed to complete sale: " . $e->getMessage();
    }
}
?>