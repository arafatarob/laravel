<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
$id = (int)($_GET['id'] ?? 0);
$st = $pdo->prepare("SELECT s.*, c.name customer, c.phone, c.address FROM sales s LEFT JOIN customers c ON c.id=s.customer_id WHERE s.id=?");
$st->execute([$id]);
$s = $st->fetch();
if (!$s) die('Invoice not found');
$st = $pdo->prepare("SELECT si.*, p.name, u.short_name as unit FROM sale_items si LEFT JOIN products p ON p.id=si.product_id LEFT JOIN units u ON p.unit_id = u.id WHERE si.sale_id=?");
$st->execute([$id]); $items = $st->fetchAll();
$settings = get_settings($pdo);
$page_title = 'Invoice '.$s['invoice_no'];
include __DIR__ . '/../includes/header.php';
?>
<div class="text-end mb-2 no-print">
  <button class="btn btn-light" onclick="window.print()"><i class="bi bi-printer"></i> Print</button>
  <a class="btn btn-primary" href="sales.php"><i class="bi bi-plus-lg"></i> New Sale</a>
</div>
<div class="invoice-box">
  <div class="d-flex justify-content-between mb-4">
    <div>
      <h2 style="color:var(--primary);margin:0"><?= e($settings['store_name']) ?></h2>
      <div class="text-muted small"><?= e($settings['store_address']) ?></div>
      <div class="text-muted small"><?= e($settings['store_phone']) ?> · <?= e($settings['store_email']) ?></div>
    </div>
    <div class="text-end">
      <h3 style="margin:0">INVOICE</h3>
      <div><strong><?= e($s['invoice_no']) ?></strong></div>
      <div class="small text-muted"><?= date('d M, Y H:i', strtotime($s['created_at'])) ?></div>
    </div>
  </div>
  <div class="row mb-3"><div class="col-6"><strong>Bill To:</strong><br><?= e($s['customer'] ?? 'Walk-in') ?><br><?= e($s['phone'] ?? '') ?><br><?= e($s['address'] ?? '') ?></div>
  <div class="col-6 text-end"><strong>Payment:</strong> <?= e(ucfirst($s['payment_method'])) ?><br><strong>Status:</strong> <?= e(ucfirst($s['status'])) ?></div></div>
  <table class="table">
    <thead><tr><th>#</th><th>Product</th><th>Qty</th><th>Price</th><th class="text-end">Total</th></tr></thead>
    <tbody>
      <?php foreach($items as $i=>$it): ?>
      <tr><td><?= $i+1 ?></td><td><?= e($it['name']) ?></td><td><?= $it['qty'] ?> <small class="text-muted"><?= e($it['unit'] ?? 'Pcs') ?></small></td><td>৳ <?= number_format($it['price'],2) ?></td><td class="text-end">৳ <?= number_format($it['total'],2) ?></td></tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="row"><div class="col-6"></div><div class="col-6">
    <div class="d-flex justify-content-between"><span>Subtotal:</span><span>৳ <?= number_format($s['subtotal'],2) ?></span></div>
    <div class="d-flex justify-content-between"><span>Discount:</span><span>৳ <?= number_format($s['discount'],2) ?></span></div>
    <div class="d-flex justify-content-between"><span>Tax:</span><span>৳ <?= number_format($s['tax'],2) ?></span></div>
    <div class="d-flex justify-content-between"><span>Shipping:</span><span>৳ <?= number_format($s['shipping'],2) ?></span></div>
    <div class="d-flex justify-content-between border-top pt-2 mt-2"><strong>Total:</strong><strong>৳ <?= number_format($s['total'],2) ?></strong></div>
    <div class="d-flex justify-content-between"><span>Paid:</span><span>৳ <?= number_format($s['paid'],2) ?></span></div>
    <div class="d-flex justify-content-between" style="color:#EF4444"><strong>Due:</strong><strong>৳ <?= number_format($s['due'],2) ?></strong></div>
  </div></div>
  <div class="mt-5 text-center text-muted small">Thank you for your business!</div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
