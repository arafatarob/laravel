<?php
include('db.php');
if(!isset($_GET['product_id']))
{ header("Location: index.php"); }
$product_id = $_GET['product_id'];

// Product-er name ar price dekhate hobe form-e
$res = $conn->query("SELECT * FROM products WHERE id = $product_id");
$product = $res->fetch_assoc();
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

        <div class="mb-6 p-4 bg-blue-50 rounded-lg">
            <p class="text-sm text-blue-600 font-semibold uppercase">Product Info</p>
            <h3 class="text-lg font-bold"><?php echo $product['name']; ?></h3>
            <p class="text-green-600 font-bold">Total: $<?php echo $product['price']; ?></p>
        </div>

        <form action="buy_now.php" method="POST" class="space-y-4">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">

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
