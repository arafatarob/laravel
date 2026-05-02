<?php include('db.php'); $user_id = 2; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-5">My Orders</h2>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Order ID</th>
                    <th class="p-2 border">Total Amount</th>
                    <th class="p-2 border">Status</th>
                    <th class="p-2 border">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM orders WHERE user_id = $user_id ORDER BY id DESC");
                while($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td class="p-2 border">#<?php echo $row['id']; ?></td>
                    <td class="p-2 border">$<?php echo $row['total_amount']; ?></td>
                    <td class="p-2 border">
                        <span class="px-2 py-1 rounded text-white text-xs
                        <?php echo $row['status'] == 'pending' ? 'bg-yellow-500' : ($row['status'] == 'completed' ? 'bg-green-500' : 'bg-blue-500'); ?>">
                            <?php echo strtoupper($row['status']); ?>
                        </span>
                    </td>
                    <td class="p-2 border"><?php echo $row['created_at']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="index.php" class="inline-block mt-5 text-blue-500">← Back to Shopping</a>
    </div>
</body>
</html>
