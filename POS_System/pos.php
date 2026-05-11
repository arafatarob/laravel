<?php 
$page_title = "POS Billing Terminal";
include('common/sidebar.php'); 
if (!hasAccess('pos', $permissions, $user_role)) {
    die("Access Denied: You do not have permission to access POS Billing.");
}
?>
    <main class="main-content">
        <?php include('common/header.php'); ?>
        <div class="content-body">
            <div class="welcome-card">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h1>POS Billing Terminal</h1>
                    <button class="btn-add" style="background: #10b981; color: white; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer;">
                        <i class="fas fa-print"></i> Print Last Receipt
                    </button>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
                <!-- Product Selection -->
                <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                    <h3>Select Products</h3>
                    <hr style="margin: 15px 0; opacity: 0.1;">
                    <p style="color: #64748b;">Product search and selection UI goes here...</p>
                </div>

                <!-- Cart Summary -->
                <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                    <h3>Order Summary</h3>
                    <hr style="margin: 15px 0; opacity: 0.1;">
                    <div style="font-size: 1.5rem; font-weight: bold; text-align: right; color: #3b82f6;">Total: $0.00</div>
                    <button style="width: 100%; background: #3b82f6; color: white; border: none; padding: 15px; border-radius: 8px; margin-top: 20px; font-weight: bold; cursor: pointer;">CHECKOUT</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>