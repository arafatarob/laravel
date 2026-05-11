<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ./authentication/login.php");
    exit();
}

$user_role = $_SESSION['user_role'] ?? 'user';
$user_name = $_SESSION['user_name'] ?? 'Guest';

// Define Permissions
$permissions = [
    'admin' => ['dashboard', 'pos', 'products', 'purchases', 'sales', 'inventory', 'customers', 'returns', 'reports', 'users', 'suppliers', 'categories', 'settings'],
    'manager' => ['dashboard', 'products', 'purchases', 'reports', 'inventory', 'suppliers', 'categories'],
    'salesboy' => ['dashboard', 'pos', 'sales', 'customers', 'returns']
];

function hasAccess($module, $permissions, $user_role) {
    return in_array($module, $permissions[$user_role] ?? []);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - POS System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --sidebar-width: 260px;
            --header-height: 70px;
            --primary-color: #3b82f6;
            --bg-dark: #0f172a;
            --bg-light: #f8fafc;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --sidebar-bg: #1e293b;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background: var(--bg-light); color: var(--text-main); display: flex; }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--sidebar-bg);
            color: white;
            position: fixed;
            transition: all 0.3s;
        }
        .sidebar-header {
            padding: 2rem;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .nav-links { list-style: none; padding: 1rem 0; }
        .nav-links li a {
            display: flex;
            align-items: center;
            padding: 12px 24px;
            color: #cbd5e1;
            text-decoration: none;
            transition: 0.3s;
            gap: 12px;
        }
        .nav-links li a:hover, .nav-links li a.active {
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary-color);
            border-left: 4px solid var(--primary-color);
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
            min-height: 100vh;
        }

        /* Header */
        .header {
            height: var(--header-height);
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .user-profile { display: flex; align-items: center; gap: 10px; cursor: pointer; }
        .user-avatar { width: 35px; height: 35px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; }

        /* Dashboard Cards */
        .content-body { padding: 2rem; }
        .welcome-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
        }
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .stat-icon { width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        .stat-info h3 { font-size: 1.5rem; margin-bottom: 2px; }
        .stat-info p { color: var(--text-muted); font-size: 0.9rem; }

        .logout-btn { color: #ef4444; text-decoration: none; font-weight: 600; display: flex; align-items: center; gap: 5px; }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">POS System</div>
        <ul class="nav-links">
            <li><a href="dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>"><i class="fas fa-home"></i> Dashboard</a></li>
            
            <?php if (hasAccess('pos', $permissions, $user_role)): ?>
                <li><a href="pos.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'pos.php' ? 'active' : ''; ?>"><i class="fas fa-calculator"></i> POS Billing</a></li>
            <?php endif; ?>

            <?php if (hasAccess('products', $permissions, $user_role)): ?>
                <li><a href="products.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>"><i class="fas fa-box"></i> Products</a></li>
            <?php endif; ?>

            <?php if (hasAccess('categories', $permissions, $user_role)): ?>
                <li><a href="categories.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'active' : ''; ?>"><i class="fas fa-tags"></i> Categories</a></li>
            <?php endif; ?>

            <?php if (hasAccess('suppliers', $permissions, $user_role)): ?>
                <li><a href="suppliers.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'suppliers.php' ? 'active' : ''; ?>"><i class="fas fa-truck-moving"></i> Suppliers</a></li>
            <?php endif; ?>

            <?php if (hasAccess('purchases', $permissions, $user_role)): ?>
                <li><a href="purchases.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'purchases.php' ? 'active' : ''; ?>"><i class="fas fa-shopping-cart"></i> Purchases</a></li>
            <?php endif; ?>

            <?php if (hasAccess('sales', $permissions, $user_role)): ?>
                <li><a href="sales.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'sales.php' ? 'active' : ''; ?>"><i class="fas fa-chart-line"></i> Sales</a></li>
            <?php endif; ?>

            <?php if (hasAccess('inventory', $permissions, $user_role)): ?>
                <li><a href="inventory.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'inventory.php' ? 'active' : ''; ?>"><i class="fas fa-warehouse"></i> Inventory</a></li>
            <?php endif; ?>

            <?php if (hasAccess('customers', $permissions, $user_role)): ?>
                <li><a href="customers.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'customers.php' ? 'active' : ''; ?>"><i class="fas fa-users"></i> Customers</a></li>
            <?php endif; ?>

            <?php if (hasAccess('returns', $permissions, $user_role)): ?>
                <li><a href="returns.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'returns.php' ? 'active' : ''; ?>"><i class="fas fa-undo"></i> Returns</a></li>
            <?php endif; ?>

            <?php if (hasAccess('reports', $permissions, $user_role)): ?>
                <li><a href="reports.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'reports.php' ? 'active' : ''; ?>"><i class="fas fa-file-invoice"></i> Reports</a></li>
            <?php endif; ?>

            <?php if (hasAccess('users', $permissions, $user_role)): ?>
                <li><a href="users.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : ''; ?>"><i class="fas fa-user-shield"></i> User Management</a></li>
            <?php endif; ?>

            <?php if (hasAccess('settings', $permissions, $user_role)): ?>
                <li><a href="settings.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : ''; ?>"><i class="fas fa-cog"></i> Settings</a></li>
            <?php endif; ?>
        </ul>
    </aside>