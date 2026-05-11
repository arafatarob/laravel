<?php
require_once __DIR__ . '/../includes/functions.php';
$msg = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $email = trim($_POST['email'] ?? '');
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email=?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        $token = bin2hex(random_bytes(20));
        $exp = date('Y-m-d H:i:s', time() + 3600);
        $pdo->prepare("UPDATE users SET reset_token=?, reset_expires=? WHERE email=?")->execute([$token,$exp,$email]);
        $msg = "Password reset link generated (demo): <code>" . BASE_URL . "/auth/reset.php?token=$token</code>";
    } else {
        $msg = 'If the email exists, a reset link has been sent.';
    }
}
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Forgot Password</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= BASE_URL ?>/assets/css/style.css" rel="stylesheet"></head><body>
<div class="auth-page"><div class="auth-card">
<h2>Forgot Password</h2><p class="sub">Enter your email to receive a reset link.</p>
<?php if ($msg): ?><div class="alert alert-info"><?= $msg ?></div><?php endif; ?>
<form method="post"><?= csrf_field() ?>
<div class="mb-3"><label class="form-label">Email</label><input name="email" type="email" class="form-control" required></div>
<button class="btn btn-primary w-100">Send Reset Link</button>
<p class="text-center mt-3 small"><a href="login.php" style="color:var(--primary)">Back to login</a></p>
</form></div></div></body></html>
