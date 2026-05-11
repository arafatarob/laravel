<?php
require_once __DIR__ . '/../includes/functions.php';
if (!empty($_SESSION['user_id'])) redirect(BASE_URL . '/modules/dashboard.php');

$err = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $email = trim($_POST['email'] ?? '');
    $pass = $_POST['password'] ?? '';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !$pass) {
        $err = 'Please provide valid credentials.';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email=? AND status='active' LIMIT 1");
        $stmt->execute([$email]);
        $u = $stmt->fetch();
        if ($u && password_verify($pass, $u['password'])) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $u['id'];
            $_SESSION['user_name'] = $u['name'];
            $_SESSION['user_email'] = $u['email'];
            $_SESSION['user_role'] = $u['role'];
            redirect(BASE_URL . '/modules/dashboard.php');
        }
        $err = 'Invalid email or password.';
    }
}
$settings = get_settings($pdo);
?>
<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><title>Login · <?= e($settings['store_name']) ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
<link href="<?= BASE_URL ?>/assets/css/style.css" rel="stylesheet">
</head><body>
<div class="auth-page">
  <div class="auth-card">
    <div class="text-center mb-3">
      <div class="brand-icon mx-auto" style="width:54px;height:54px;border-radius:14px"><i class="bi bi-bag-fill"></i></div>
    </div>
    <h2 class="text-center"><?= e($settings['store_name']) ?></h2>
    <p class="sub text-center">Sign in to your admin dashboard</p>
    <?php if ($err): ?><div class="alert alert-danger py-2"><?= e($err) ?></div><?php endif; ?>
    <form method="post" autocomplete="off">
      <?= csrf_field() ?>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="admin@pos.com" required>
      </div>
      <div class="mb-2">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" value="admin123" required>
      </div>
      <div class="d-flex justify-content-between align-items-center mb-3">
        <label class="small"><input type="checkbox" name="remember"> Remember me</label>
        <a href="forgot.php" class="small" style="color:var(--primary)">Forgot password?</a>
      </div>
      <button class="btn btn-primary w-100">Sign In</button>
    </form>
    <p class="text-center small text-muted mt-3 mb-0">Demo: admin@pos.com / admin123</p>
  </div>
</div>
</body></html>
