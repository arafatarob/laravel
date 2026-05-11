
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/dashboard.css">

<?php
    if(isset($_POST['update_status'])){
        $order_id = $_POST['order_id'];
        $status = $_POST['status'];
        $conn->query("UPDATE orders SET status='$status' WHERE id=$order_id");
    }
    ?>

    <div class="main-content">
        <div class="adminHome">
            <div class="max-w-5xl mx-auto my-20 p-8 rounded shadow">
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
                    <td class="p-2 border" data-label="User"><?php echo $order['name']; ?></td>
                    <td class="p-2 border" data-label="Amount">$<?php echo $order['total_amount']; ?></td>
                    <td class="p-2 border" data-label="Status"><?php echo $order['status']; ?></td>
                    <td class="p-2 border" data-label="Action">
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
        </div>
    </div>