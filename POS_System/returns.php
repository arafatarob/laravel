<?php 
$page_title = "Sales Returns";
include('common/sidebar.php'); 
if (!hasAccess('returns', $permissions, $user_role)) {
    die("Access Denied: You do not have permission to view Returns.");
}
?>
    <main class="main-content">
        <?php include('common/header.php'); ?>
        <div class="content-body">
            <div class="welcome-card">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h1>Sales Returns</h1>
                    <a href="#" class="btn-add" style="background: #ef4444; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none;"><i class="fas fa-undo"></i> New Return</a>
                </div>
            </div>
        
            <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid #f1f5f9;">
                            <th style="padding: 12px;">Return ID</th>
                            <th style="padding: 12px;">Invoice No</th>
                            <th style="padding: 12px;">Date</th>
                            <th style="padding: 12px;">Refund Amount</th>
                            <th style="padding: 12px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td style="padding: 12px;" colspan="5">No returns found.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>