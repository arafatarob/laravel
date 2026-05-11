<?php 
$page_title = "System Settings";
include('common/sidebar.php'); 
if (!hasAccess('settings', $permissions, $user_role)) {
    die("Access Denied: Only Admins can access settings.");
}
?>
    <main class="main-content">
        <?php include('common/header.php'); ?>
        <div class="content-body">
            <div class="welcome-card">
                <h1>System Settings</h1>
            </div>
        
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <h3 style="margin-bottom: 20px;">Store Configuration</h3>
                <div style="display: flex; flex-direction: column; gap: 15px; max-width: 500px;">
                    <div><label style="display:block; margin-bottom:5px;">Store Name</label><input type="text" value="My POS Store" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:5px;"></div>
                    <div><label style="display:block; margin-bottom:5px;">Currency Symbol</label><input type="text" value="$" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:5px;"></div>
                    <div><label style="display:block; margin-bottom:5px;">Tax Percentage (%)</label><input type="number" value="10" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:5px;"></div>
                    <button style="background:#3b82f6; color:white; border:none; padding:12px; border-radius:5px; cursor:pointer;">Update Settings</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>