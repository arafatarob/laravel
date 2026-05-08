<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$role = strtolower($_SESSION['user_role'] ?? 'user');
?>
<!-- ADMIN SIDEBAR -->
<div class="sidebar">
    <div id="admin-nav" class="admin-nav">
        <?php if ($role === 'admin'): ?>
            <div class="role-badge" style="background: var(--danger);">ADMIN</div>

            <div class="nav-section">
                <div class="nav-section-title">Overview</div>
                <div class="nav-item active"><a href="admin_dashboard.php">
                    📊 Dashboard
                </a></div>
            </div>

            <div class="nav-section">
                <div class="nav-section-title">Management</div>
                <div class="nav-item active"><a href="add_product.php">
                    📊 Add Product
                </a></div>
                <div class="nav-item active"><a href="order.php">
                    📊 All Orders
                </a></div>
                <div class="nav-item active"><a href="all_user.php">
                    📊 All Users
                </a></div>
            </div>
        <?php else: ?>
            <div class="role-badge" style="background: #2563eb;">USER</div>

            <div class="nav-section">
                <div class="nav-section-title">Overview</div>
                <div class="nav-item active"><a href="user.php">
                    📦 My Order
                </a></div>
            </div>
        <?php endif; ?>

        <div class="nav-section">
            <!-- <div class="nav-section-title">Content</div> -->
        </div>

        <div class="nav-section">
            <!-- <div class="nav-section-title">Settings</div> -->
        </div>

        <div class="sidebar-user-info" style="padding: 1rem; border-top: 1px solid rgba(255,255,255,0.08); margin-top: 1rem; color: #e2e8f0;">
            <div style="font-size: 0.95rem; font-weight: 700; margin-bottom: 0.25rem;">
                <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Guest'); ?>
            </div>
            <div style="font-size: 0.8rem; color: rgba(226,232,240,0.8);">
                Role: <?php echo htmlspecialchars(strtoupper($_SESSION['user_role'] ?? 'user')); ?>
            </div>
        </div>
    </div>
</div>

<script src="../js/custom.js"></script>
