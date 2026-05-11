<?php
$page_title = "View Sale";
include('common/sidebar.php');
require_once './config/database.php';

if (!isset($_GET['id'])) {
    echo "<script>window.location.href = 'sales.php';</script>";
    exit;
}

$sale_id = $_GET['id'];

$sale = $conn->query("
    SELECT s.*, c.name as customer_name, u.name as user_name
    FROM sales s 
    LEFT JOIN customers c ON s.customer_id = c.id
    LEFT JOIN users u ON s.user_id = u.id
    WHERE s.id = $sale_id
")->fetch_assoc();

$sale_items = $conn->query("
    SELECT si.*, p.name as product_name 
    FROM sale_items si
    LEFT JOIN products p ON si.product_id = p.id
    WHERE si.sale_id = $sale_id
")->fetch_all(MYSQLI_ASSOC);
?>

<style>
    .invoice-container {
        background: var(--card-bg);
        padding: 3rem;
        border-radius: 12px;
        max-width: 800px;
        margin: auto;
    }
    .invoice-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        border-bottom: 2px solid var(--border-color);
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }
    .invoice-details {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2rem;
    }
    th, td {
        padding: 12px 0;
        border-bottom: 1px solid var(--border-color);
    }
    .invoice-total {
        text-align: right;
    }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <div class="invoice-container">
            <div class="invoice-header">
                <div>
                    <h2>Invoice #<?= $sale['id'] ?></h2>
                    <p>Date: <?= date('d M, Y', strtotime($sale['sale_date'])) ?></p>
                </div>
                <div>
                    <h4>JANNAT STORE</h4>
                </div>
            </div>
            <div class="invoice-details">
                <div>
                    <strong>Billed To:</strong>
                    <p><?= htmlspecialchars($sale['customer_name']) ?></p>
                </div>
                <div>
                    <strong>Billed By:</strong>
                    <p><?= htmlspecialchars($sale['user_name']) ?></p>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th style="text-align: center;">Qty</th>
                        <th style="text-align: right;">Price</th>
                        <th style="text-align: right;">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sale_items as $item) : ?>
                        <tr>
                            <td><?= htmlspecialchars($item['product_name']) ?></td>
                            <td style="text-align: center;"><?= $item['quantity'] ?></td>
                            <td style="text-align: right;">৳<?= number_format($item['price'], 2) ?></td>
                            <td style="text-align: right;">৳<?= number_format($item['price'] * $item['quantity'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="invoice-total">
                <h3>Total: ৳<?= number_format($sale['total_amount'], 2) ?></h3>
            </div>
        </div>
    </div>
</main>

</body>
</html>