<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-white p-5 shadow mb-10">
        <h1 class="text-xl font-bold text-center">Arafat Store</h1>
    </nav>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-10">
        <?php
        $result = $conn->query("SELECT * FROM products");
        while($row = $result->fetch_assoc()):
        ?>
        <div class="bg-white p-5 rounded-lg shadow-md border hover:shadow-xl transition">
            <h3 class="text-lg font-semibold"><?php echo $row['name']; ?></h3>
            <p class="text-gray-500 text-sm my-2"><?php echo $row['description']; ?></p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-blue-600 font-bold">$<?php echo $row['price']; ?></span>
                <a href="order_form.php?product_id=<?php echo $row['id']; ?>"
   class="bg-green-500 text-white px-4 py-1 rounded text-sm inline-block">
   Buy Now
</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
