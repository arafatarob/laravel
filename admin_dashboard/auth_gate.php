<?php
session_start();
$product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : null;
$next = $product_id ? "order_form.php?product_id=$product_id" : 'index.php';
$loginUrl = "login.php" . ($next ? "?next=" . urlencode($next) : '');
$registerUrl = "signup.php" . ($next ? "?next=" . urlencode($next) : '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Login or Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">
    <div class="max-w-xl w-full bg-white rounded-2xl shadow-xl p-8">
        <h1 class="text-3xl font-bold mb-4">Please login or register first</h1>
        <p class="text-gray-600 mb-6">To complete your order, you need an account. If you already have one, login now. If you don't have an account yet, register first.</p>
        <div class="grid gap-4 sm:grid-cols-2">
            <a href="<?php echo $loginUrl; ?>" class="block text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Login</a>
            <a href="<?php echo $registerUrl; ?>" class="block text-center bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700">Register</a>
        </div>
        <div class="mt-6 text-sm text-gray-500">
            <p>Already registered? Choose Login.</p>
            <p>New user? Choose Register.</p>
        </div>
    </div>
</body>
</html>
