<?php 
$page_title = "Inventory Stock";
include('common/sidebar.php'); 
if (!hasAccess('inventory', $permissions, $user_role)) {
    die("Access Denied: You do not have permission to view Inventory.");
}
?>
    <main class="main-content">
        <?php include('common/header.php'); ?>
        <div class="content-body">
            <div class="welcome-card">
                <h1>Stock Inventory</h1>
            </div>
        
            <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid #f1f5f9;">
                            <th style="padding: 12px;">Product</th>
                            <th style="padding: 12px;">Category</th>
                            <th style="padding: 12px;">Current Stock</th>
                            <th style="padding: 12px;">Unit</th>
                            <th style="padding: 12px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 12px;" colspan="5">Inventory list is empty.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>