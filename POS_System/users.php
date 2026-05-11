<?php 
$page_title = "User Management";
include('common/sidebar.php'); 
if (!hasAccess('users', $permissions, $user_role)) {
    die("Access Denied: Only Admins can manage users.");
}
?>
    <main class="main-content">
        <?php include('common/header.php'); ?>
        <div class="content-body">
            <div class="welcome-card">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h1>System Users</h1>
                    <a href="authentication/signup.php" class="btn-add" style="background: #8b5cf6; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none;"><i class="fas fa-user-plus"></i> Add New User</a>
                </div>
            </div>
        
            <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; border-bottom: 2px solid #f1f5f9;">
                            <th style="padding: 12px;">Name</th>
                            <th style="padding: 12px;">Email</th>
                            <th style="padding: 12px;">Role</th>
                            <th style="padding: 12px;">Created At</th>
                            <th style="padding: 12px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 12px;" colspan="5">Use the database connection to fetch users here.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>