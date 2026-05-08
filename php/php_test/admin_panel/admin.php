<?php require('common/db.php'); ?>




<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-5">Admin Panel - Add Product</h2>

        <!-- Add Product Form -->
        <form action="process.php" method="POST" class="grid grid-cols-2 gap-4">
            <input type="text" name="name" placeholder="Product Name" class="border p-2 rounded" required>
            <input type="number" name="price" placeholder="Price" class="border p-2 rounded" required>
            <select name="category_id" class="border p-2 rounded">
                <option value="1">Electronics</option> <!-- Static for now, can be dynamic -->
            </select>
            <textarea name="description" placeholder="Description" class="border p-2 rounded col-span-2"></textarea>
            <button type="submit" name="add_product" class="bg-blue-500 text-white p-2 rounded col-span-2">Add Product</button>
        </form>

        <hr class="my-10">

        <!-- Product List -->
        <h2 class="text-2xl font-bold mb-5">Manage Products</h2>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Price</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM products");
                while($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td class="p-2 border"><?php echo $row['name']; ?></td>
                    <td class="p-2 border">$<?php echo $row['price']; ?></td>
                    <td class="p-2 border">
                        <a href="process.php?delete=<?php echo $row['id']; ?>" class="text-red-500">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <?php
    if(isset($_POST['update_status'])){
        $order_id = $_POST['order_id'];
        $status = $_POST['status'];
        $conn->query("UPDATE orders SET status='$status' WHERE id=$order_id");
    }
    ?>

    <div class="max-w-5xl mx-auto my-20 bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-5">Admin - All Orders</h2>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">User</th>
                    <th class="p-2 border">Amount</th>
                    <th class="p-2 border">Status</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = $conn->query("SELECT orders.*, users.name FROM orders JOIN users ON orders.user_id = users.id ORDER BY id DESC");
                while($order = $res->fetch_assoc()):
                ?>
                <tr>
                    <td class="p-2 border"><?php echo $order['name']; ?></td>
                    <td class="p-2 border">$<?php echo $order['total_amount']; ?></td>
                    <td class="p-2 border"><?php echo $order['status']; ?></td>
                    <td class="p-2 border">
                        <form method="POST" class="flex gap-2">
                            <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                            <select name="status" class="border text-sm">
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                            <button type="submit" name="update_status" class="bg-blue-500 text-white px-2 py-1 text-xs rounded">Update</button>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
