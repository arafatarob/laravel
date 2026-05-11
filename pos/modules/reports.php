<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
$from=$_GET['from'] ?? date('Y-m-01');
$to=$_GET['to'] ?? date('Y-m-d');
$type=$_GET['type'] ?? 'sales';

$totSales=(float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM sales WHERE DATE(created_at) BETWEEN '$from' AND '$to'")->fetchColumn();
$totPur=(float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM purchases WHERE DATE(created_at) BETWEEN '$from' AND '$to'")->fetchColumn();
$totExp=(float)$pdo->query("SELECT COALESCE(SUM(amount),0) FROM expenses WHERE expense_date BETWEEN '$from' AND '$to'")->fetchColumn();
$profit = $totSales - $totPur - $totExp;
$totOrders=(int)$pdo->query("SELECT COUNT(*) FROM sales WHERE DATE(created_at) BETWEEN '$from' AND '$to'")->fetchColumn();

// chart
$days=[]; $ser=[];
for($i=14;$i>=0;$i--){ $d=date('Y-m-d',strtotime("-$i day")); $days[]=date('d M',strtotime($d));
  $ser[]=(float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM sales WHERE DATE(created_at)='$d'")->fetchColumn(); }
if(array_sum($ser)==0) $ser=[5,8,4,12,9,15,11,18,14,22,17,20,25,19,28];

$top=$pdo->query("SELECT p.name, COALESCE(SUM(si.qty*si.price),0) total FROM products p LEFT JOIN sale_items si ON si.product_id=p.id GROUP BY p.id ORDER BY total DESC LIMIT 5")->fetchAll();

$page_title='Reports'; $page_sub='View and analyze your business reports.';
include __DIR__.'/../includes/header.php'; ?>
<div class="card-soft mb-3">
  <form class="row g-2 align-items-end">
    <div class="col-md-3"><label class="form-label">Report Type</label>
      <select class="form-select" name="type"><option value="sales" <?= $type==='sales'?'selected':'' ?>>Sales Report</option>
      <option value="purchase" <?= $type==='purchase'?'selected':'' ?>>Purchase Report</option>
      <option value="profit" <?= $type==='profit'?'selected':'' ?>>Profit Report</option>
      <option value="expense" <?= $type==='expense'?'selected':'' ?>>Expense Report</option>
      <option value="stock" <?= $type==='stock'?'selected':'' ?>>Stock Report</option></select></div>
    <div class="col-md-3"><label class="form-label">Start Date</label><input type="date" class="form-control" name="from" value="<?= e($from) ?>"></div>
    <div class="col-md-3"><label class="form-label">End Date</label><input type="date" class="form-control" name="to" value="<?= e($to) ?>"></div>
    <div class="col-md-3 d-flex gap-2"><button class="btn btn-primary flex-grow-1"><i class="bi bi-funnel"></i> Generate Report</button>
      <button type="button" class="btn btn-light" onclick="window.print()"><i class="bi bi-printer"></i></button></div>
  </form>
</div>
<div class="row g-3">
  <div class="col-md-3"><div class="stat-card"><div><div class="label">Total Sales</div><div class="value">৳ <?= number_format($totSales,0) ?></div></div><div class="stat-icon"><i class="bi bi-graph-up"></i></div></div></div>
  <div class="col-md-3"><div class="stat-card"><div><div class="label">Total Cost</div><div class="value">৳ <?= number_format($totPur,0) ?></div></div><div class="stat-icon orange"><i class="bi bi-bag"></i></div></div></div>
  <div class="col-md-3"><div class="stat-card"><div><div class="label">Total Profit</div><div class="value">৳ <?= number_format($profit,0) ?></div></div><div class="stat-icon green"><i class="bi bi-cash-coin"></i></div></div></div>
  <div class="col-md-3"><div class="stat-card"><div><div class="label">Total Orders</div><div class="value"><?= $totOrders ?></div></div><div class="stat-icon blue"><i class="bi bi-receipt"></i></div></div></div>
</div>
<div class="row g-3 mt-1">
  <div class="col-xl-8"><div class="card-soft"><div class="section-title"><h3>Sales Trend</h3></div><canvas id="repChart" height="100"></canvas></div></div>
  <div class="col-xl-4"><div class="card-soft"><div class="section-title"><h3>Top Products</h3></div>
    <?php foreach($top as $t): ?><div class="d-flex justify-content-between py-2 border-bottom"><span><?= e($t['name']) ?></span><strong>৳ <?= number_format($t['total'],0) ?></strong></div><?php endforeach; ?>
  </div></div>
</div>
<script>
new Chart(document.getElementById('repChart'),{type:'line',data:{labels:<?= json_encode($days) ?>,datasets:[{data:<?= json_encode($ser) ?>,borderColor:'#5B2EFF',backgroundColor:'rgba(91,46,255,.15)',fill:true,tension:.4,borderWidth:3,pointBackgroundColor:'#5B2EFF',pointRadius:4}]},options:{plugins:{legend:{display:false}}}});
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>
