<?php session_start(); include('./common/db.php'); ?>

<?php

if (empty($_SESSION['cart'])) {
    echo "<script>alert('Your cart is empty!'); window.location.href='index.php';</script>";
    exit;
}

$total_price = 0;
foreach($_SESSION['cart'] as $item) {
    $total_price += ($item['price'] * $item['quantity']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout - Confirm Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="container mx-auto max-w-4xl py-8 sm:py-12">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="p-8 sm:p-10">
                
                <div class="flex items-center mb-8">
                    <svg class="h-10 w-10 mr-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h2 class="text-3xl font-extrabold text-gray-800">Checkout</h2>
                </div>

                <!-- Order Summary -->
                <div class="mb-8">
                    <p class="text-lg font-semibold text-gray-700 border-b pb-3 mb-4">Order Summary</p>
                    <div class="space-y-4">
                        <?php foreach($_SESSION['cart'] as $id => $item): ?>
                            <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center gap-4">
                                    <img src="<?php echo $item['image']; ?>" class="w-16 h-16 object-cover rounded-md shadow">
                                    <div>
                                        <p class="font-bold text-gray-800"><?php echo $item['name']; ?></p>
                                        <p class="text-sm text-gray-500">Quantity: <?php echo $item['quantity']; ?></p>
                                    </div>
                                </div>
                                <p class="font-bold text-lg text-gray-800">$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-right pt-5 mt-5 border-t-2 border-dashed">
                        <p class="text-2xl font-bold text-gray-800">Total: <span class="text-blue-600">$<?php echo number_format($total_price, 2); ?></span></p>
                    </div>
                </div>

                <!-- Shipping & Payment Form -->
                <form action="buy_now.php" method="POST" class="space-y-8">
                    
                    <!-- Shipping Details -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Shipping Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Phone Number</label>
                                <input type="text" name="phone" placeholder="e.g., 01700000000" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3" required>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Delivery Address</label>
                                <textarea name="address" rows="3" placeholder="e.g., House 123, Road 4, Block A, Mirpur" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3" required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Payment Method</h3>
                        <div class="space-y-3">
                            <label class="flex items-center p-4 border border-gray-300 rounded-lg has-[:checked]:bg-blue-50 has-[:checked]:border-blue-400 cursor-pointer transition-all">
                                <input type="radio" name="payment_method" value="Cash on Delivery" class="form-radio h-5 w-5 text-blue-600" checked>
                                <span class="ml-4 text-gray-700 font-medium">Cash on Delivery</span>
                            </label>
                             <label class="flex items-center p-4 border border-gray-300 rounded-lg has-[:checked]:bg-blue-50 has-[:checked]:border-blue-400 cursor-pointer transition-all">
                                <input type="radio" name="payment_method" value="Bkash" class="form-radio h-5 w-5 text-blue-600">
                                <span class="ml-4 text-gray-700 font-medium">Bkash</span>
                            </label>
                             <label class="flex items-center p-4 border border-gray-300 rounded-lg has-[:checked]:bg-blue-50 has-[:checked]:border-blue-400 cursor-pointer transition-all">
                                <input type="radio" name="payment_method" value="Nagad" class="form-radio h-5 w-5 text-blue-600">
                                <span class="ml-4 text-gray-700 font-medium">Nagad</span>
                            </label>
                             <label class="flex items-center p-4 border border-gray-300 rounded-lg has-[:checked]:bg-blue-50 has-[:checked]:border-blue-400 cursor-pointer transition-all">
                                <input type="radio" name="payment_method" value="Prepaid Card" class="form-radio h-5 w-5 text-blue-600">
                                <span class="ml-4 text-gray-700 font-medium">Prepaid Card</span>
                            </label>
                        </div>
                    </div>

                    <!-- Payment Details Sections -->
                    <div id="payment-details" class="pt-4">
                        <div id="cod-details" class="payment-info p-4 bg-gray-100 border border-gray-200 rounded-lg">
                            <p class="text-sm text-gray-700">You will pay with cash when your order is delivered.</p>
                        </div>
                        <div id="bkash-details" class="payment-info hidden p-4 bg-gray-100 border border-gray-200 rounded-lg">
                            <p class="text-sm text-gray-700 font-semibold mb-2">Bkash Payment Instructions:</p>
                            <ol class="list-decimal list-inside text-sm text-gray-600">
                                <li>Go to your Bkash App and select 'Make Payment'.</li>
                                <li>Enter our merchant number: <strong class="font-mono text-gray-800">01700000000</strong>.</li>
                                <li>Enter the total amount: <strong class="font-mono text-gray-800">$<?php echo number_format($total_price, 2); ?></strong>.</li>
                                <li>Save the Transaction ID (TrxID) and enter it below.</li>
                            </ol>
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Transaction ID</label>
                                <input type="text" name="transaction_id_bkash" placeholder="Enter Bkash TrxID" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3">
                            </div>
                        </div>
                        <div id="nagad-details" class="payment-info hidden p-4 bg-gray-100 border border-gray-200 rounded-lg">
                            <p class="text-sm text-gray-700 font-semibold mb-2">Nagad Payment Instructions:</p>
                             <ol class="list-decimal list-inside text-sm text-gray-600">
                                <li>Go to your Nagad App and select 'Merchant Pay'.</li>
                                <li>Enter our merchant number: <strong class="font-mono text-gray-800">01800000000</strong>.</li>
                                <li>Enter the total amount: <strong class="font-mono text-gray-800">$<?php echo number_format($total_price, 2); ?></strong>.</li>
                                <li>Save the Transaction ID and enter it below.</li>
                            </ol>
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Transaction ID</label>
                                <input type="text" name="transaction_id_nagad" placeholder="Enter Nagad TrxID" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3">
                            </div>
                        </div>
                        <div id="card-details" class="payment-info hidden p-4 bg-gray-100 border border-gray-200 rounded-lg">
                            <p class="text-sm text-gray-700">After confirming the order, you will be redirected to a secure payment gateway.</p>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" name="confirm_order" class="w-full bg-blue-600 text-white font-bold py-4 px-4 rounded-lg text-lg hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Confirm & Place Order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
            const paymentInfos = {
                'Cash on Delivery': document.getElementById('cod-details'),
                'Bkash': document.getElementById('bkash-details'),
                'Nagad': document.getElementById('nagad-details'),
                'Prepaid Card': document.getElementById('card-details')
            };

            function togglePaymentDetails(selectedValue) {
                Object.values(paymentInfos).forEach(info => info.classList.add('hidden'));
                if (paymentInfos[selectedValue]) {
                    paymentInfos[selectedValue].classList.remove('hidden');
                }
            }

            const initialMethod = document.querySelector('input[name="payment_method"]:checked').value;
            togglePaymentDetails(initialMethod);

            paymentMethods.forEach(method => {
                method.addEventListener('change', function () {
                    togglePaymentDetails(this.value);
                });
            });
        });
    </script>
</body>
</html>