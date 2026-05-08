<?php session_start(); include('./common/db.php'); ?>

<?php
if(isset($_POST['confirm_order'])){
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }

    if (empty($_SESSION['cart'])) {
        header('Location: index.php');
        exit();
    }

    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $user_id = intval($_SESSION['user_id']);
    
    $total_amount = 0;
    foreach($_SESSION['cart'] as $item) {
        $total_amount += ($item['price'] * $item['quantity']);
    }

    $sql_order = "INSERT INTO orders (user_id, total_amount, status)
    VALUES ($user_id, $total_amount, 'pending')";

    if($conn->query($sql_order)){
        $order_id = $conn->insert_id;

        // Insert each item from cart
        foreach($_SESSION['cart'] as $product_id => $item) {
            $qty = $item['quantity'];
            $price = $item['price'];
            $sql_item = "INSERT INTO order_items (order_id, product_id, quantity, unit_price)
                         VALUES ($order_id, $product_id, $qty, $price)";
            $conn->query($sql_item);
        }

        // Clear Cart
        unset($_SESSION['cart']);

        // Success hole user dashboard-e niye jabe
        header("Location: ./admin/user.php?msg=Order Successfull!");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
