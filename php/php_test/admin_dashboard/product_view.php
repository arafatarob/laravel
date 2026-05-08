<?php
session_start();
include('./common/db.php');

if (!isset($_GET['product_id']) || !is_numeric($_GET['product_id'])) {
    header('Location: index.php');
    exit();
}

$product_id = intval($_GET['product_id']);
$result = $conn->query("SELECT * FROM products WHERE id = $product_id");
$product = $result->fetch_assoc();

if (!$product) {
    header('Location: index.php');
    exit();
}

$img_src = !empty($product['image']) ? "./image/" . $product['image'] : "image/avatar.png";
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Product - <?php echo htmlspecialchars($product['name']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="p-5 shadow mb-10 flex justify-between items-center px-10"  style="background: #1a1a2e;">
        <h1 class="text-xl font-bold text-white">Madhuri - Jannat - Store</h1>
        <div  style="background: #1a1a2e;">
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="admin/user_dashboard.php" class="mr-4 text-blue-600">Dashboard</a>
                <a href="logout.php" class="text-red-500 font-semibold">Logout</a>
            <?php else: ?>
                <a href="login.php" class="bg-blue-500 text-white px-4 py-2 rounded mr-3">Login</a>
                <a href="signup.php" class="bg-green-500 text-white px-4 py-2 rounded">Register</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container mx-auto px-10">
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="md:flex">
                <div class="md:w-1/2 bg-gray-100">
                    <img src="<?php echo $img_src; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="w-full h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8">
                    <h1 class="text-3xl font-bold mb-4"><?php echo htmlspecialchars($product['name']); ?></h1>
                    <p class="text-gray-600 mb-4"><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>
                    <div class="text-xl font-semibold text-gray-800 mb-2">Stock: <?php echo intval($product['stock']); ?></div>
                    <div class="text-2xl font-semibold text-blue-600 mb-6">$<?php echo $product['price']; ?></div>
                    <div class="flex flex-wrap gap-3">
                        <a href="order_form.php?product_id=<?php echo $product_id; ?>" class="bg-green-500 text-white px-5 py-3 rounded font-semibold hover:bg-green-600 transition">Buy Now</a>
                        <a href="index.php" class="bg-gray-200 text-gray-800 px-5 py-3 rounded font-semibold hover:bg-gray-300 transition">Back to Store</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
