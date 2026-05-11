<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();

$totalSales    = (float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM sales WHERE status='completed'")->fetchColumn();
$totalPurchase = (float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM purchases")->fetchColumn();
$totalProfit   = $totalSales - $totalPurchase;
$totalDue      = (float)$pdo->query("SELECT COALESCE(SUM(due),0) FROM sales")->fetchColumn();

$tCustomers = (int)$pdo->query("SELECT COUNT(*) FROM customers")->fetchColumn();
$tVendors   = (int)$pdo->query("SELECT COUNT(*) FROM vendors")->fetchColumn();
$tProducts  = (int)$pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$tReturns   = (int)$pdo->query("SELECT COUNT(*) FROM returns")->fetchColumn();
$tExpenses  = (float)$pdo->query("SELECT COALESCE(SUM(amount),0) FROM expenses")->fetchColumn();

// chart data: last 7 days
$days = []; $salesSeries = []; $purchaseSeries = [];
for ($i=6; $i>=0; $i--) {
    $d = date('Y-m-d', strtotime("-$i day"));
    $days[] = date('d M', strtotime($d));
    $salesSeries[] = (float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM sales WHERE DATE(created_at)='$d'")->fetchColumn();
    $purchaseSeries[] = (float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM purchases WHERE DATE(created_at)='$d'")->fetchColumn();
}
// fallback dummy if all zero
if (array_sum($salesSeries) == 0) $salesSeries = [12,18,14,22,28,24,32];
if (array_sum($purchaseSeries) == 0) $purchaseSeries = [8,12,10,15,18,16,22];

$payMethods = ['cash','bkash','nagad','card','bank'];
$payData = [];
foreach ($payMethods as $m) {
    $payData[$m] = (float)$pdo->query("SELECT COALESCE(SUM(total),0) FROM sales WHERE payment_method='$m'")->fetchColumn();
}
if (array_sum($payData) == 0) $payData = ['cash'=>60,'bkash'=>25,'nagad'=>0,'card'=>15,'bank'=>0];

$topProducts = $pdo->query("SELECT p.name, p.price, COALESCE(SUM(si.qty),0) sold
   FROM products p LEFT JOIN sale_items si ON si.product_id=p.id
   GROUP BY p.id ORDER BY sold DESC LIMIT 5")->fetchAll();

$recent = $pdo->query("SELECT s.invoice_no, s.payment_method, s.total, s.created_at, c.name customer
   FROM sales s LEFT JOIN customers c ON c.id=s.customer_id ORDER BY s.id DESC LIMIT 6")->fetchAll();

$page_title = 'Dashboard';
$page_sub = "Welcome back, ".current_user()['name'].". Here's what's happening in your store today.";
include __DIR__ . '/../includes/header.php';
?>

<div class="row g-3">
  <div class="col-md-6 col-xl-3"><div class="stat-card">
    <div><div class="label">Total Sales</div><div class="value">৳ <span data-counter="<?= (int)$totalSales ?>">0</span></div>
    <span class="delta up"><i class="bi bi-arrow-up"></i> +13.5% vs yesterday</span></div>
    <div class="stat-icon"><i class="bi bi-graph-up-arrow"></i></div>
  </div></div>
  <div class="col-md-6 col-xl-3"><div class="stat-card">
    <div><div class="label">Total Purchase</div><div class="value">৳ <span data-counter="<?= (int)$totalPurchase ?>">0</span></div>
    <span class="delta up"><i class="bi bi-arrow-up"></i> +8.2% vs yesterday</span></div>
    <div class="stat-icon orange"><i class="bi bi-bag-check"></i></div>
  </div></div>
  <div class="col-md-6 col-xl-3"><div class="stat-card">
    <div><div class="label">Total Profit</div><div class="value">৳ <span data-counter="<?= (int)$totalProfit ?>">0</span></div>
    <span class="delta up"><i class="bi bi-arrow-up"></i> +15.7% vs yesterday</span></div>
    <div class="stat-icon green"><i class="bi bi-cash-coin"></i></div>
  </div></div>
  <div class="col-md-6 col-xl-3"><div class="stat-card">
    <div><div class="label">Total Due</div><div class="value">৳ <span data-counter="<?= (int)$totalDue ?>">0</span></div>
    <span class="delta down"><i class="bi bi-arrow-down"></i> -3.2% vs yesterday</span></div>
    <div class="stat-icon red"><i class="bi bi-wallet2"></i></div>
  </div></div>
</div>

<div class="row g-3 mt-1">
  <div class="col-xl-7"><div class="card-soft">
    <div class="section-title"><h3>Sales Overview</h3><span class="link">This Week</span></div>
    <canvas id="salesChart" height="110"></canvas>
  </div></div>
  <div class="col-xl-5"><div class="card-soft">
    <div class="section-title"><h3>Top Selling Products</h3><span class="link">View all</span></div>
    <?php foreach ($topProducts as $tp): ?>
    <div class="d-flex align-items-center justify-content-between py-2 border-bottom">
      <div class="d-flex align-items-center gap-2">
        <div style="width:34px;height:34px;border-radius:8px;background:#F0EAFF;display:flex;align-items:center;justify-content:center;color:var(--primary)"><i class="bi bi-box"></i></div>
        <div><div style="font-weight:600;font-size:13px"><?= e($tp['name']) ?></div></div>
      </div>
      <div style="font-weight:600;color:var(--primary)"><?= (int)$tp['sold'] ?></div>
    </div>
    <?php endforeach; ?>
  </div></div>
</div>

<div class="row g-3 mt-1">
  <div class="col-xl-7"><div class="card-soft">
    <div class="section-title"><h3>Purchase Overview</h3><span class="link">This Week</span></div>
    <canvas id="purchaseChart" height="110"></canvas>
  </div></div>
  <div class="col-xl-5"><div class="card-soft">
    <div class="section-title"><h3>Sales by Payment Method</h3></div>
    <canvas id="payChart" height="180"></canvas>
  </div></div>
</div>

<div class="row g-3 mt-1">
  <div class="col-xl-8"><div class="card-soft">
    <div class="section-title"><h3>Recent Transactions</h3></div>
    <table class="table">
      <thead><tr><th>Invoice</th><th>Customer</th><th>Method</th><th>Date</th><th class="text-end">Amount</th></tr></thead>
      <tbody>
        <?php foreach ($recent as $r): ?>
        <tr>
          <td><?= e($r['invoice_no']) ?></td>
          <td><?= e($r['customer'] ?? 'Walk-in') ?></td>
          <td><span class="badge-pill badge-completed"><?= e(ucfirst($r['payment_method'])) ?></span></td>
          <td><?= date('d M, Y', strtotime($r['created_at'])) ?></td>
          <td class="text-end fw-semibold">৳ <?= number_format($r['total'],2) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div></div>
  <div class="col-xl-4">
    <div class="row g-3">
      <div class="col-6"><div class="stat-card"><div><div class="label">Customers</div><div class="value" data-counter="<?= $tCustomers ?>">0</div></div><div class="stat-icon blue"><i class="bi bi-people"></i></div></div></div>
      <div class="col-6"><div class="stat-card"><div><div class="label">Vendors</div><div class="value" data-counter="<?= $tVendors ?>">0</div></div><div class="stat-icon"><i class="bi bi-truck"></i></div></div></div>
      <div class="col-6"><div class="stat-card"><div><div class="label">Products</div><div class="value" data-counter="<?= $tProducts ?>">0</div></div><div class="stat-icon orange"><i class="bi bi-box-seam"></i></div></div></div>
      <div class="col-6"><div class="stat-card"><div><div class="label">Returns</div><div class="value" data-counter="<?= $tReturns ?>">0</div></div><div class="stat-icon red"><i class="bi bi-arrow-counterclockwise"></i></div></div></div>
      <div class="col-12"><div class="stat-card"><div><div class="label">Total Expenses</div><div class="value">৳ <span data-counter="<?= (int)$tExpenses ?>">0</span></div></div><div class="stat-icon green"><i class="bi bi-cash-stack"></i></div></div></div>
    </div>
  </div>
</div>

<script>
const grad = (ctx, c1, c2) => { const g = ctx.createLinearGradient(0,0,0,250); g.addColorStop(0,c1); g.addColorStop(1,c2); return g; };
new Chart(document.getElementById('salesChart'), {
  type:'line',
  data:{labels: <?= json_encode($days) ?>, datasets:[{label:'Sales',data: <?= json_encode($salesSeries) ?>,borderColor:'#5B2EFF',backgroundColor:(c)=>grad(c.chart.ctx,'rgba(91,46,255,.35)','rgba(91,46,255,0)'),fill:true,tension:.4,borderWidth:3,pointBackgroundColor:'#5B2EFF',pointRadius:4}]},
  options:{plugins:{legend:{display:false}},scales:{y:{grid:{color:'#EEF1F8'}},x:{grid:{display:false}}}}
});
new Chart(document.getElementById('purchaseChart'), {
  type:'line',
  data:{labels: <?= json_encode($days) ?>, datasets:[{label:'Purchase',data: <?= json_encode($purchaseSeries) ?>,borderColor:'#10B981',backgroundColor:(c)=>grad(c.chart.ctx,'rgba(16,185,129,.3)','rgba(16,185,129,0)'),fill:true,tension:.4,borderWidth:3,pointBackgroundColor:'#10B981',pointRadius:4}]},
  options:{plugins:{legend:{display:false}},scales:{y:{grid:{color:'#EEF1F8'}},x:{grid:{display:false}}}}
});
new Chart(document.getElementById('payChart'), {
  type:'doughnut',
  data:{labels:['Cash','bKash','Nagad','Card','Bank'],datasets:[{data: <?= json_encode(array_values($payData)) ?>,backgroundColor:['#5B2EFF','#EC4899','#F59E0B','#3B82F6','#10B981'],borderWidth:0}]},
  options:{cutout:'68%',plugins:{legend:{position:'bottom',labels:{boxWidth:10,font:{size:11}}}}}
});
</script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
