<?php
require_once __DIR__ . '/functions.php';
require_login();
$settings = get_settings($pdo);
$user = current_user();
$current = basename($_SERVER['PHP_SELF'], '.php');
$page_title = $page_title ?? ucfirst($current);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($page_title) ?> · <?= e($settings['store_name'] ?? 'POS') ?></title>
<link rel="icon" href="<?= BASE_URL ?>/assets/images/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="<?= BASE_URL ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="app-shell">
  <aside class="sidebar" id="sidebar">
    <div class="brand">
      <div class="brand-icon"><i class="bi bi-bag-fill"></i></div>
      <div class="brand-name"><?= e($settings['store_name'] ?? 'JANNAT STORE') ?></div>
    </div>
    <nav class="nav-menu">
      <?php
      $links = [
        ['dashboard','Dashboard','bi-grid-1x2-fill'],
        ['products','Products','bi-box-seam'],
        ['sales','Sales','bi-cart-check'],
        ['purchases','Purchases','bi-bag-plus'],
        ['customers','Customers','bi-people'],
        ['vendors','Vendors','bi-truck'],
        ['returns','Returns','bi-arrow-counterclockwise'],
        ['expenses','Expenses','bi-cash-stack'],
        ['reports','Reports','bi-bar-chart-line'],
        ['users','Users','bi-person-badge'],
        ['settings','Settings','bi-gear'],
      ];
      foreach ($links as [$slug,$label,$icon]):
        $active = $current === $slug ? 'active' : '';
      ?>
      <a class="nav-item <?= $active ?>" href="<?= BASE_URL ?>/modules/<?= $slug ?>.php">
        <i class="bi <?= $icon ?>"></i><span><?= $label ?></span>
      </a>
      <?php endforeach; ?>
    </nav>
    <div class="sidebar-user">
      <div class="avatar"><?= strtoupper(substr($user['name'],0,1)) ?></div>
      <div>
        <div class="u-name"><?= e($user['name']) ?></div>
        <div class="u-role"><span class="dot"></span> <?= e(ucfirst($user['role'])) ?></div>
      </div>
    </div>
  </aside>

  <main class="main">
    <header class="topbar">
      <button class="btn btn-light btn-sm d-lg-none" onclick="document.getElementById('sidebar').classList.toggle('open')"><i class="bi bi-list"></i></button>
      <div>
        <h1 class="page-title"><?= e($page_title) ?></h1>
        <p class="page-sub"><?= e($page_sub ?? 'Welcome back, '.$user['name']) ?></p>
      </div>
      <div class="topbar-actions">
        <div class="date-pill"><i class="bi bi-calendar3"></i> <?= date('d M, Y') ?></div>
        <button class="icon-btn" id="darkToggle" title="Toggle theme"><i class="bi bi-moon-stars"></i></button>
        <a class="icon-btn" href="<?= BASE_URL ?>/auth/logout.php" title="Logout"><i class="bi bi-box-arrow-right"></i></a>
      </div>
    </header>
    <div class="content">
<?php if ($f = flash('success')): ?><div class="alert alert-success"><?= e($f) ?></div><?php endif; ?>
<?php if ($f = flash('error')): ?><div class="alert alert-danger"><?= e($f) ?></div><?php endif; ?>
