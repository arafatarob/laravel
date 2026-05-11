<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $pdo->prepare("UPDATE settings SET store_name=?,store_email=?,store_phone=?,store_address=?,currency=?,tax_rate=? WHERE id=1")
    ->execute([trim($_POST['store_name']),trim($_POST['store_email']),trim($_POST['store_phone']),trim($_POST['store_address']),trim($_POST['currency']),(float)$_POST['tax_rate']]);
  flash('success','Settings updated'); redirect('settings.php');
}
$s=get_settings($pdo);
$page_title='Settings'; $page_sub='Manage your system settings.';
include __DIR__.'/../includes/header.php'; ?>
<div class="row g-3">
  <div class="col-md-3">
    <div class="card-soft">
      <h6 class="mb-3">Settings Menu</h6>
      <div class="d-flex flex-column gap-1">
        <a href="#general" class="nav-item active" style="color:var(--primary);background:#F0EAFF;border-radius:10px;padding:10px 14px"><i class="bi bi-gear"></i> General Settings</a>
        <a href="#" class="nav-item" style="color:var(--text);padding:10px 14px"><i class="bi bi-shop"></i> Store Settings</a>
        <a href="#" class="nav-item" style="color:var(--text);padding:10px 14px"><i class="bi bi-credit-card"></i> Payment Methods</a>
        <a href="#" class="nav-item" style="color:var(--text);padding:10px 14px"><i class="bi bi-percent"></i> Tax Settings</a>
        <a href="#" class="nav-item" style="color:var(--text);padding:10px 14px"><i class="bi bi-receipt"></i> Invoice Settings</a>
        <a href="#" class="nav-item" style="color:var(--text);padding:10px 14px"><i class="bi bi-envelope"></i> Email Settings</a>
        <a href="#" class="nav-item" style="color:var(--text);padding:10px 14px"><i class="bi bi-cloud-arrow-down"></i> Backup Settings</a>
      </div>
    </div>
  </div>
  <div class="col-md-9">
    <div class="card-soft">
      <h5 class="mb-3">General Settings</h5>
      <form method="post"><?= csrf_field() ?>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label">Store Name</label><input class="form-control" name="store_name" value="<?= e($s['store_name']) ?>" required></div>
          <div class="col-md-6"><label class="form-label">Store Email</label><input class="form-control" name="store_email" value="<?= e($s['store_email']) ?>"></div>
          <div class="col-md-6"><label class="form-label">Store Phone</label><input class="form-control" name="store_phone" value="<?= e($s['store_phone']) ?>"></div>
          <div class="col-md-3"><label class="form-label">Currency</label><input class="form-control" name="currency" value="<?= e($s['currency']) ?>"></div>
          <div class="col-md-3"><label class="form-label">Tax Rate (%)</label><input type="number" step="0.01" class="form-control" name="tax_rate" value="<?= e($s['tax_rate']) ?>"></div>
          <div class="col-12"><label class="form-label">Store Address</label><textarea class="form-control" name="store_address" rows="2"><?= e($s['store_address']) ?></textarea></div>
        </div>
        <div class="text-end mt-3"><button class="btn btn-primary">Save Changes</button></div>
      </form>
    </div>
  </div>
</div>
<?php include __DIR__.'/../includes/footer.php'; ?>
