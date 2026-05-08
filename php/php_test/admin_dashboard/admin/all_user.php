<?php 
    include('../common/db.php'); 
?>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
<?php 
    
    require('../common/header.php'); 
    require('../common/sidebar.php');
    
    ?>

     <div class="main-content">
        <div class="adminHome">
            <div class="max-w-5xl mx-auto my-20 p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-5">Admin - All Users</h2>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">User</th>
                    <th class="p-2 border">name</th>
                    <th class="p-2 border">email</th>
                    <th class="p-2 border">role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = $conn->query("SELECT * FROM users");
                while($user = $res->fetch_assoc()):
                ?>
                <tr>
                    <td class="p-2 border">#<?php echo $user['id']; ?></td>
                    <td class="p-2 border"><?php echo $user['name']; ?></td>
                    <td class="p-2 border"><?php echo $user['email']; ?></td>
                    <td class="p-2 border"><?php echo $user['role']; ?></td>
                    <!-- <td class="p-2 border">
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
                    </td> -->
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
        </div>
    </div>