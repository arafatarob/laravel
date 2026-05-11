<?php 
$page_title = "Overview Dashboard";
include('common/sidebar.php'); 
?>

    <main class="main-content">
        <?php include('common/header.php'); ?>

        <div class="content-body">
            <div class="welcome-card">
                <h1>Welcome back, <?php echo htmlspecialchars($user_name); ?>!</h1>
                <p style="color: var(--text-muted); margin-top: 5px;">Here's what's happening with your store today.</p>
            </div>

            <div class="stats-grid">
                <?php if ($user_role !== 'manager'): ?>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="stat-info">
                        <h3>$12,450</h3>
                        <p>Total Sales</p>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($user_role !== 'salesboy'): ?>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(59, 130, 246, 0.1); color: #3b82f6;">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <div class="stat-info">
                        <h3>842</h3>
                        <p>Total Products</p>
                    </div>
                </div>
                <?php endif; ?>

                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div class="stat-info">
                        <h3>15</h3>
                        <p>Pending Orders</p>
                    </div>
                </div>

                <?php if ($user_role === 'admin'): ?>
                <div class="stat-card">
                    <div class="stat-icon" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="stat-info">
                        <h3>124</h3>
                        <p>Active Customers</p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <div style="margin-top: 2rem; background: white; padding: 2rem; border-radius: 12px; text-align: center; border: 2px dashed #e2e8f0;">
                <p style="color: #94a3b8;">Select a module from the sidebar to start managing your data.</p>
            </div>
        </div>
    </main>
</body>
</html>