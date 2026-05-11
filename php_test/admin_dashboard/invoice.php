<?php
session_start();
include('./common/db.php');

if (!isset($_GET['order_id'])) {
    echo "No order specified.";
    exit;
}

$order_id = intval($_GET['order_id']);

// Fetch order details
$sql_order = "SELECT o.*, u.name as user_name, u.email as user_email, p.payment_method, p.transaction_id FROM orders o JOIN users u ON o.user_id = u.id JOIN payments p ON o.id = p.order_id WHERE o.id = $order_id";
$order_result = $conn->query($sql_order);
if ($order_result->num_rows == 0) {
    echo "Order not found.";
    exit;
}
$order = $order_result->fetch_assoc();

// Fetch order items
$sql_items = "SELECT oi.*, p.name as product_name FROM order_items oi JOIN products p ON oi.product_id = p.id WHERE oi.order_id = $order_id";
$items_result = $conn->query($sql_items);

$invoiceSQL = $conn->query("SELECT * FROM invoices");

$invoice = $invoiceSQL->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice #<?php echo $order_id; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #invoice-box, #invoice-box * {
                visibility: visible;
            }
            #invoice-box {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8" id="invoice-box">
        <div class="bg-white shadow-2xl rounded-lg overflow-hidden">
            <div class="px-8 py-10">
                <div class="flex justify-between items-start">
                    <div class="flex items-center">
                        <svg class="h-12 w-12 mr-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <div>
                            <h1 class="text-3xl font-extrabold text-gray-800">INVOICE</h1>
                            <p class="text-sm text-gray-500">#<?php echo $invoice['invoice_no']; ?></p>
                        </div>
                    </div>
                    <div class="text-right">
                        <h2 class="text-lg font-semibold text-gray-700">Madhuri - Jannat - Store</h2>
                        <p class="text-xs text-gray-500">123 Main Street, Dhaka, BD</p>
                        <p class="text-xs text-gray-500">contact@madhurijannat.com</p>
                    </div>
                </div>

                <div class="flex justify-between mt-12">
                    <div>
                        <h3 class="font-semibold text-gray-600 uppercase tracking-wider">Billed To</h3>
                        <p class="text-gray-800 font-medium mt-2"><?php echo $order['user_name']; ?></p>
                        <p class="text-gray-600 text-sm"><?php echo $order['user_email']; ?></p>
                        <p class="text-gray-600 text-sm"><?php echo $order['phone']; ?></p>
                        <p class="text-gray-600 text-sm"><?php echo $order['delivery_address']; ?></p>
                    </div>
                    <div class="text-right">
                        <h3 class="font-semibold text-gray-600 uppercase tracking-wider">Payment Details</h3>
                        <p class="text-gray-800 font-medium mt-2">Date: <?php echo date("d M, Y", strtotime($order['created_at'])); ?></p>
                        <p class="text-gray-600 text-sm">Method: <?php echo $order['payment_method']; ?></p>
                        <?php if(!empty($order['transaction_id'])): ?>
                            <p class="text-gray-600 text-sm">TrxID: <?php echo $order['transaction_id']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mt-10">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr>
                                <th class="py-3 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-200">Product</th>
                                <th class="py-3 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-200 text-right">Qty</th>
                                <th class="py-3 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-200 text-right">Price</th>
                                <th class="py-3 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-200 text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($item = $items_result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="py-4 px-4 border-b border-gray-200"><?php echo $item['product_name']; ?></td>
                                <td class="py-4 px-4 border-b border-gray-200 text-right"><?php echo $item['quantity']; ?></td>
                                <td class="py-4 px-4 border-b border-gray-200 text-right">$<?php echo number_format($item['unit_price'], 2); ?></td>
                                <td class="py-4 px-4 border-b border-gray-200 text-right font-semibold">$<?php echo number_format($item['quantity'] * $item['unit_price'], 2); ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-end mt-8">
                    <div class="w-full max-w-xs">
                        <div class="flex justify-between text-gray-600">
                            <span>Subtotal:</span>
                            <span>$<?php echo number_format($order['total_amount'], 2); ?></span>
                        </div>
                        <div class="flex justify-between text-gray-600 mt-2">
                            <span>Tax (0%):</span>
                            <span>$0.00</span>
                        </div>
                        <div class="border-t border-gray-200 my-3"></div>
                        <div class="flex justify-between text-gray-800 font-bold text-lg">
                            <span>Grand Total:</span>
                            <span class="text-blue-600">$<?php echo number_format($order['total_amount'], 2); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 px-8 py-4 text-center text-sm text-gray-500">
                <p>Thank you for your business!</p>
                <p><a href="./admin/user.php">Go to Order List</a></p>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto my-6 text-center sm:text-right no-print space-x-2">
        <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <span class="mr-2">🖨️</span> Print
        </button>
        <button id="download-pdf" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
            <span class="mr-2">📄</span> Download PDF
        </button>
    </div>

    <script>
        document.getElementById('download-pdf').addEventListener('click', function () {
            const element = document.getElementById('invoice-box');
            const opt = {
                margin:       [0.5, 0.2, 0.5, 0.2],
                filename:     'invoice_<?php echo $order_id; ?>.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2, useCORS: true },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(element).set(opt).save();
        });
    </script>

</body>
</html>