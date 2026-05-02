<?php
include('db.php');

if(isset($_POST['confirm_order'])){
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $user_id = 2; // Test korar jonno fixed user ID

    // Order table-e phone ar address-er jonno column thakle seta add korben
    // Jodi column na thake, tobe SQL alter kore add korte hobe
    $sql_order = "INSERT INTO orders (user_id, total_amount, status)
    VALUES ($user_id, $price, 'pending')";

    if($conn->query($sql_order)){
        $order_id = $conn->insert_id;

        // Order item entry
        $sql_item = "INSERT INTO order_items (order_id, product_id, quantity, unit_price)
                     VALUES ($order_id, $product_id, 1, $price)";
        $conn->query($sql_item);

        // Success hole user dashboard-e niye jabe
        header("Location: user_dashboard.php?msg=Order Successfull!");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
