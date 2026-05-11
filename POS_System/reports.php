<?php
$page_title = "Reports";
include('common/sidebar.php');
require_once './config/database.php';

if (!hasAccess('reports', $permissions, $user_role)) {
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit;
}

// Dummy data for demonstration. In a real application, you would fetch this from the database based on filters.
$report_type = $_GET['report_type'] ?? 'sales';
$start_date = $_GET['start_date'] ?? date('Y-m-01');
$end_date = $_GET['end_date'] ?? date('Y-m-d');

// Dummy summary data
$total_sales = 45750;
$total_cost = 32250;
$total_profit = $total_sales - $total_cost;
$total_orders = 125;

// Dummy chart data
// $chart_labels = ["24 May", "25 May", "26 May", "27 May", "28 May", "29 May", "30 May"];
// $chart_data = [22000, 19000, 25000, 18000, 23000, 20000, 21000];

// Dummy top products
$top_products = [
    ["name" => "Parle Biscuit", "image" => "./assets/images/default-product.png", "amount" => 10400],
    ["name" => "Fresh Milk", "image" => "./assets/images/default-product.png", "amount" => 6200],
    ["name" => "চিনি (Sugar)", "image" => "./assets/images/default-product.png", "amount" => 4800],
    ["name" => "Miniket Rice", "image" => "./assets/images/default-product.png", "amount" => 3000],
    ["name" => "Soyabean Oil", "image" => "./assets/images/default-product.png", "amount" => 2300],
];

?>
<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    :root {
        --primary-purple: #6f42c1;
        --border-color-light: #e9ecef;
    }
    .main-content { background-color: #F8FAFC; }
    .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
    .filter-form { background: var(--card-bg); border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); padding: 1.5rem; display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem; }
    .filter-form .form-control, .filter-form .btn { height: calc(1.5em + .75rem + 2px); }
    .filter-form .btn-primary { background-color: var(--primary-purple); border-color: var(--primary-purple); }
    .summary-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem; }
    .summary-card { background: var(--card-bg); padding: 1.5rem; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
    .summary-card h3 { font-size: 14px; color: var(--text-secondary); margin-bottom: 0.5rem; }
    .summary-card .value { font-size: 24px; font-weight: 700; color: var(--text-primary); }
    .report-body { display: grid; grid-template-columns: 1fr; gap: 1.5rem; }
    @media (min-width: 992px) { .report-body { grid-template-columns: 2fr 1fr; } }
    .chart-container, .top-products-container { background: var(--card-bg); padding: 2rem; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
    .top-products-list .product-item { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; }
    .top-products-list .product-info { display: flex; align-items: center; gap: 10px; }
    .top-products-list img { width: 40px; height: 40px; border-radius: 6px; object-fit: cover; }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <div class="page-header">
            <div>
                <h2>Reports</h2>
                <p>View and analyze your business reports.</p>
            </div>
        </div>

        <form class="filter-form" method="GET">
            <select name="report_type" class="form-control">
                <option value="sales" <?= $report_type == 'sales' ? 'selected' : '' ?>>Sales Report</option>
                <option value="purchase" <?= $report_type == 'purchase' ? 'selected' : '' ?>>Purchase Report</option>
                <option value="profit_loss" <?= $report_type == 'profit_loss' ? 'selected' : '' ?>>Profit/Loss Report</option>
            </select>
            <input type="date" name="start_date" class="form-control" value="<?= $start_date ?>">
            <input type="date" name="end_date" class="form-control" value="<?= $end_date ?>">
            <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Generate Report</button>
        </form>

        <div class="summary-cards">
            <div class="summary-card"><h3>Total Sales</h3><p class="value">৳<?= number_format($total_sales) ?></p></div>
            <div class="summary-card"><h3>Total Cost</h3><p class="value">৳<?= number_format($total_cost) ?></p></div>
            <div class="summary-card"><h3>Total Profit</h3><p class="value">৳<?= number_format($total_profit) ?></p></div>
            <div class="summary-card"><h3>Total Orders</h3><p class="value"><?= $total_orders ?></p></div>
        </div>

        <div class="report-body">
            <div class="chart-container">
                <h4>Sales Trend</h4>
                <canvas id="salesTrendChart"></canvas>
            </div>
            <div class="top-products-container">
                <h4>Top Products</h4>
                <hr>
                <div class="top-products-list">
                    <?php foreach ($top_products as $product): ?>
                        <div class="product-item">
                            <div class="product-info">
                                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                                <span><?= htmlspecialchars($product['name']) ?></span>
                            </div>
                            <span class="font-weight-bold">৳<?= number_format($product['amount']) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('salesTrendChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?= json_encode($chart_labels) ?>,
            datasets: [{
                label: 'Sales',
                data: <?= json_encode($chart_data) ?>,
                borderColor: '<?= '--primary-purple' ?>',
                backgroundColor: 'rgba(111, 66, 193, 0.1)',
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '<?= '--primary-purple' ?>',
                pointBorderColor: '#fff',
                pointHoverRadius: 7,
                pointHoverBackgroundColor: '<?= '--primary-purple' ?>'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            if (value >= 1000) {
                                return (value / 1000) + 'K';
                            }
                            return value;
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});
</script>

</body>
</html>