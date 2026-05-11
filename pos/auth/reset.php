<?php
require_once __DIR__ . '/../includes/functions.php';
$token = $_GET['token'] ?? '';
$stmt = $pdo->prepare("SELECT * FROM users WHERE reset_token=? AND reset_expires>NOW()");
$stmt->execute([$token]);
$u = $stmt->fetch();
$msg = null;
if (!$u) die('Invalid or expired token.');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $p = $_POST['password'] ?? '';
    if (strlen($p) < 6) $msg = 'Password too short.';
    else {
        $hash = password_hash($p, PASSWORD_DEFAULT);
        $pdo->prepare("UPDATE users SET password=?, reset_token=NULL, reset_expires=NULL WHERE id=?")->execute([$hash,$u['id']]);
        flash('success','Password updated. Please login.');
        redirect(BASE_URL . '/auth/login.php');
    }
}
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Reset Password</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= BASE_URL ?>/assets/css/style.css" rel="stylesheet"></head><body>
<div class="auth-page"><div class="auth-card">
<h2>Reset Password</h2><p class="sub">Enter your new password.</p>
<?php if ($msg): ?><div class="alert alert-danger"><?= e($msg) ?></div><?php endif; ?>
<form method="post"><?= csrf_field() ?>
<div class="mb-3"><label class="form-label">New Password</label><input name="password" type="password" class="form-control" required></div>
<button class="btn btn-primary w-100">Update Password</button>
</form></div></div></body></html>
