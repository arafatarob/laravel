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
    $payment_method = $_POST['payment_method'];
    $user_id = intval($_SESSION['user_id']);
    
    $transaction_id = null;
    if ($payment_method === 'Bkash' && !empty($_POST['transaction_id_bkash'])) {
        $transaction_id = $_POST['transaction_id_bkash'];
    } elseif ($payment_method === 'Nagad' && !empty($_POST['transaction_id_nagad'])) {
        $transaction_id = $_POST['transaction_id_nagad'];
    }

    $total_amount = 0;
    foreach($_SESSION['cart'] as $item) {
        $total_amount += ($item['price'] * $item['quantity']);
    }

    $sql_order = "INSERT INTO orders (user_id, total_amount, phone, delivery_address, status)
    VALUES ($user_id, $total_amount, '$phone', '$address', 'pending')";

    if($conn->query($sql_order)){
        $order_id = $conn->insert_id;

        // Insert into payment table
        $payment_status = ($payment_method == 'Cash on Delivery') ? 'pending' : 'completed'; // Example logic
        $sql_payment = "INSERT INTO payments (order_id, amount, payment_method, transaction_id, payment_status, payment_date)
                        VALUES ($order_id, $total_amount, '$payment_method', '$transaction_id', '$payment_status', NOW())";
        $conn->query($sql_payment);

        // Insert into invoice table
        $invoice_no = 'INV-' . date('Ymd') . '-' . $order_id;
        $sql_invoice = "INSERT INTO invoices (invoice_no, order_id, invoice_date)
                        VALUES ('$invoice_no', $order_id, NOW())";
        $conn->query($sql_invoice);

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
        header("Location: invoice.php?order_id=" . $order_id);
    } else {
        echo "Error: " . $conn->error;
    }
}
?>