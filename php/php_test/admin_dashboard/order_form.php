<?php session_start(); include('./common/db.php'); ?>

<?php

if (empty($_SESSION['cart'])) {
    echo "<script>alert('Your cart is empty!'); window.location.href='index.php';</script>";
    exit;
}

$total_price = 0;
foreach($_SESSION['cart'] as $item) {
    $total_price += ($item['price'] * $item['quantity']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout - Confirm Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5 md:p-10">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-3">Checkout Details</h2>

        <div class="mb-6 space-y-4">
            <p class="text-sm text-blue-600 font-semibold uppercase border-b">Order Summary</p>
            <?php foreach($_SESSION['cart'] as $id => $item): ?>
                <div class="flex justify-between items-center bg-gray-50 p-3 rounded">
                    <div class="flex items-center gap-3">
                        <img src="<?php echo $item['image']; ?>" class="w-10 h-10 object-cover rounded">
                        <div>
                            <p class="font-bold text-sm"><?php echo $item['name']; ?></p>
                            <p class="text-xs text-gray-500">Qty: <?php echo $item['quantity']; ?></p>
                        </div>
                    </div>
                    <p class="font-bold text-gray-700">$<?php echo $item['price'] * $item['quantity']; ?></p>
                </div>
            <?php endforeach; ?>
            <div class="text-right pt-4 border-t">
                <p class="text-xl font-bold text-green-600">Total: $<?php echo $total_price; ?></p>
            </div>
        </div>

        <form action="buy_now.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" name="phone" placeholder="017XXXXXXXX" class="w-full border p-2 rounded mt-1 focus:ring-2 focus:ring-blue-400 outline-none" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Delivery Address</label>
                <textarea name="address" rows="3" placeholder="House no, Road, Area..." class="w-full border p-2 rounded mt-1 focus:ring-2 focus:ring-blue-400 outline-none" required></textarea>
            </div>

            <button type="submit" name="confirm_order" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">
                Confirm Order
            </button>
        </form>
    </div>
</body>
</html>
