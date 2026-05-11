<?php
$page_title = "Overview Dashboard";
include('common/sidebar.php');
?>
<style>
    :root {
        --primary-color: #6f42c1;
        --background-color: #f4f7fc;
        --card-background: #ffffff;
        --text-color: #333;
        --text-muted: #888;
        --border-color: #e2e8f0;
        --green-positive: #10b981;
        --red-negative: #ef4444;
    }

    .main-content {
        background-color: var(--background-color);
        padding: 2rem;
    }

    .header-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .header-left h1 {
        font-size: 24px;
        font-weight: 600;
        margin: 0;
    }

    .header-left p {
        color: var(--text-muted);
        margin-top: 5px;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .date-picker {
        background: var(--card-background);
        border: 1px solid var(--border-color);
        padding: 8px 12px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .notification-bell {
        position: relative;
        cursor: pointer;
    }

    .notification-bell .badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: var(--card-background);
        padding: 1.5rem;
        border-radius: 12px;
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .stat-info h3 {
        font-size: 22px;
        font-weight: 700;
        margin: 0;
    }

    .stat-info p {
        color: var(--text-muted);
        font-size: 14px;
        margin: 5px 0 0;
    }

    .stat-info .comparison {
        font-size: 12px;
        margin-top: 8px;
    }

    .comparison .positive {
        color: var(--green-positive);
    }

    .comparison .negative {
        color: var(--red-negative);
    }

    .chart-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .chart-container,
    .list-container {
        background: var(--card-background);
        padding: 1.5rem;
        border-radius: 12px;
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .chart-header h4 {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }

    .chart-header .filter,
    .chart-header .view-all {
        font-size: 14px;
        color: var(--primary-color);
        cursor: pointer;
    }

    .product-list .product-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid var(--border-color);
    }

    .product-list .product-item:last-child {
        border-bottom: none;
    }

    .doughnut-chart-container {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .doughnut-chart-container canvas {
        max-width: 150px;
        max-height: 150px;
    }

    .legend {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .legend li {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
    }

    .legend .color-box {
        width: 12px;
        height: 12px;
        border-radius: 3px;
    }

    .recent-transactions table {
        width: 100%;
        border-collapse: collapse;
    }

    .recent-transactions th,
    .recent-transactions td {
        text-align: left;
        padding: 12px 0;
        border-bottom: 1px solid var(--border-color);
        font-size: 14px;
    }

    .recent-transactions .status {
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 500;
    }

    .status.sale {
        background: rgba(16, 185, 129, 0.1);
        color: #10b981;
    }

    .status.purchase {
        background: rgba(59, 130, 246, 0.1);
        color: #3b82f6;
    }

    .bottom-stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 1.5rem;
    }

    .bottom-stat-card {
        background: var(--card-background);
        padding: 1.5rem;
        border-radius: 12px;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .bottom-stat-icon {
        font-size: 24px;
        color: var(--primary-color);
    }

    .bottom-stat-info h4 {
        font-size: 20px;
        font-weight: 700;
        margin: 0;
    }

    .bottom-stat-info p {
        color: var(--text-muted);
        font-size: 14px;
        margin: 5px 0 0;
    }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <div class="header-flex">
            <div class="header-left">
                <h1>Dashboard</h1>
                <p>Welcome back, Admin! Here's what's happening in your store today.</p>
            </div>
            <div class="header-right">
                <div class="date-picker">
                    <i class="fas fa-calendar-alt"></i>
                    <span>30 May, 2024</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="notification-bell">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"><i class="fas fa-shopping-bag"></i></div>
                <div class="stat-info">
                    <p>Total Sales</p>
                    <h3>৳ 45,750</h3>
                    <div class="comparison positive"><i class="fas fa-arrow-up"></i> +12.5% <span style="color: var(--text-muted)">vs yesterday</span></div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background: rgba(239, 68, 68, 0.1); color: #ef4444;"><i class="fas fa-shopping-cart"></i></div>
                <div class="stat-info">
                    <p>Total Purchase</p>
                    <h3>৳ 32,250</h3>
                    <div class="comparison positive"><i class="fas fa-arrow-up"></i> +8.2% <span style="color: var(--text-muted)">vs yesterday</span></div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background: rgba(16, 185, 129, 0.1); color: #10b981;"><i class="fas fa-chart-line"></i></div>
                <div class="stat-info">
                    <p>Total Profit</p>
                    <h3>৳ 13,500</h3>
                    <div class="comparison positive"><i class="fas fa-arrow-up"></i> +15.7% <span style="color: var(--text-muted)">vs yesterday</span></div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;"><i class="fas fa-wallet"></i></div>
                <div class="stat-info">
                    <p>Total Due</p>
                    <h3>৳ 8,250</h3>
                    <div class="comparison negative"><i class="fas fa-arrow-down"></i> -5.3% <span style="color: var(--text-muted)">vs yesterday</span></div>
                </div>
            </div>
        </div>

        <div class="chart-grid">
            <div class="chart-container">
                <div class="chart-header">
                    <h4>Sales Overview</h4>
                    <div class="filter">This Week <i class="fas fa-chevron-down"></i></div>
                </div>
                <canvas id="salesOverviewChart"></canvas>
            </div>
            <div class="list-container">
                <div class="chart-header">
                    <h4>Top Selling Products</h4>
                    <div class="view-all">View All</div>
                </div>
                <div class="product-list">
                    <div class="product-item"><span>Parle Biscuit</span> <span>520</span></div>
                    <div class="product-item"><span>Fresh Milk</span> <span>310</span></div>
                    <div class="product-item"><span>চিনি (Sugar)</span> <span>280</span></div>
                    <div class="product-item"><span>Miniket Rice</span> <span>250</span></div>
                    <div class="product-item"><span>Soyabean Oil</span> <span>190</span></div>
                </div>
            </div>
        </div>

        <div class="chart-grid">
            <div class="chart-container">
                <div class="chart-header">
                    <h4>Purchase Overview</h4>
                    <div class="filter">This Week <i class="fas fa-chevron-down"></i></div>
                </div>
                <canvas id="purchaseOverviewChart"></canvas>
            </div>
            <div class="chart-container">
                <div class="chart-header">
                    <h4>Sales by Payment Method</h4>
                </div>
                <div class="doughnut-chart-container">
                    <canvas id="salesPaymentMethodChart"></canvas>
                    <ul class="legend">
                        <li><span class="color-box" style="background: #4f46e5;"></span> Cash <span style="margin-left: auto;">60%</span></li>
                        <li><span class="color-box" style="background: #3b82f6;"></span> bKash <span style="margin-left: auto;">25%</span></li>
                        <li><span class="color-box" style="background: #f59e0b;"></span> Card <span style="margin-left: auto;">15%</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="chart-grid">
            <div class="list-container recent-transactions">
                <div class="chart-header">
                    <h4>Recent Transactions</h4>
                    <div class="view-all">View All</div>
                </div>
                <table>
                    <tr>
                        <td>INV-1005</td>
                        <td><span class="status sale">Sale</span></td>
                        <td>৳ 1,250</td>
                        <td>30 May, 10:30 AM</td>
                    </tr>
                    <tr>
                        <td>INV-1004</td>
                        <td><span class="status purchase">Purchase</span></td>
                        <td>৳ 2,300</td>
                        <td>30 May, 09:15 AM</td>
                    </tr>
                    <tr>
                        <td>INV-1003</td>
                        <td><span class="status sale">Sale</span></td>
                        <td>৳ 950</td>
                        <td>29 May, 08:45 PM</td>
                    </tr>
                    <tr>
                        <td>INV-1002</td>
                        <td><span class="status purchase">Purchase</span></td>
                        <td>৳ 1,800</td>
                        <td>29 May, 07:20 PM</td>
                    </tr>
                    <tr>
                        <td>INV-1001</td>
                        <td><span class="status sale">Sale</span></td>
                        <td>৳ 1,150</td>
                        <td>29 May, 06:10 PM</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="bottom-stats-grid">
            <div class="bottom-stat-card">
                <div class="bottom-stat-icon"><i class="fas fa-users"></i></div>
                <div class="bottom-stat-info">
                    <p>Total Customers</p>
                    <h4>1,250</h4>
                    <div class="comparison positive">+18 this month</div>
                </div>
            </div>
            <div class="bottom-stat-card">
                <div class="bottom-stat-icon"><i class="fas fa-store"></i></div>
                <div class="bottom-stat-info">
                    <p>Total Vendors</p>
                    <h4>320</h4>
                    <div class="comparison positive">+8 this month</div>
                </div>
            </div>
            <div class="bottom-stat-card">
                <div class="bottom-stat-icon"><i class="fas fa-box-open"></i></div>
                <div class="bottom-stat-info">
                    <p>Total Products</p>
                    <h4>1,850</h4>
                    <div class="comparison positive">+35 this month</div>
                </div>
            </div>
            <div class="bottom-stat-card">
                <div class="bottom-stat-icon" style="color: #ef4444;"><i class="fas fa-undo"></i></div>
                <div class="bottom-stat-info">
                    <p>Total Returns</p>
                    <h4>56</h4>
                    <div class="comparison negative">-5 this month</div>
                </div>
            </div>
            <div class="bottom-stat-card">
                <div class="bottom-stat-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="bottom-stat-info">
                    <p>Total Expenses</p>
                    <h4>৳ 6,750</h4>
                    <div class="comparison positive">+7.8% vs yesterday</div>
                </div>
            </div>
        </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Sales Overview Chart
        const salesCtx = document.getElementById('salesOverviewChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['24 May', '25 May', '26 May', '27 May', '28 May', '29 May', '30 May'],
                datasets: [{
                    label: 'Sales',
                    data: [0, 0, 0, 0, 0, 0, 0], // ডামি ডেটা অফ করে ০ করে দেওয়া হলো
                    borderColor: '#6f42c1',
                    backgroundColor: 'rgba(111, 66, 193, 0.1)',
                    fill: true,
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return (value / 1000) + 'K';
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

        // Purchase Overview Chart
        const purchaseCtx = document.getElementById('purchaseOverviewChart').getContext('2d');
        new Chart(purchaseCtx, {
            type: 'line',
            data: {
                labels: ['24 May', '25 May', '26 May', '27 May', '28 May', '29 May', '30 May'],
                datasets: [{
                    label: 'Purchase',
                    data: [8000, 15000, 10000, 20000, 18000, 22000, 25000],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return (value / 1000) + 'K';
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

        // Sales by Payment Method Chart
        const paymentMethodCtx = document.getElementById('salesPaymentMethodChart').getContext('2d');
        new Chart(paymentMethodCtx, {
            type: 'doughnut',
            data: {
                labels: ['Cash', 'bKash', 'Card'],
                datasets: [{
                    data: [60, 25, 15],
                    backgroundColor: ['#4f46e5', '#3b82f6', '#f59e0b'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                cutout: '75%',
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