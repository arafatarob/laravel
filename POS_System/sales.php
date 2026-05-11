<?php
$page_title = "Sales";
include('common/sidebar.php');
require_once './config/database.php';

if (!hasAccess('sales', $permissions, $user_role)) {
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit;
}

// Fetch data for the page
$products = $conn->query("SELECT id, name, sales_price, current_stock FROM products WHERE current_stock > 0 ORDER BY name")->fetch_all(MYSQLI_ASSOC);
$customers = $conn->query("SELECT id, name FROM customers ORDER BY name")->fetch_all(MYSQLI_ASSOC);

$last_invoice_id = $conn->query("SELECT id FROM sales ORDER BY id DESC LIMIT 1")->fetch_assoc();
$invoice_number = 'INV-' . str_pad($last_invoice_id ? $last_invoice_id['id'] + 1 : 1, 4, '0', STR_PAD_LEFT);
?>

<style>
    :root {
        --primary-purple: #6f42c1;
        --light-purple: #f3eefc;
        --border-color-light: #e9ecef;
        --text-secondary-light: #6c757d;
        --danger-color: #dc3545;
        --success-color: #28a745;
        --info-color: #17a2b8;
        --card-shadow: 0 10px 25px rgba(0,0,0,0.05);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .main-content { 
        background-color: #F8FAFC; 
        padding: 1.5rem;
    }

    .header-stats { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); 
        gap: 1.5rem; 
        margin-bottom: 2rem; 
    }

    .stat-card { 
        background: #fff; 
        padding: 1.5rem; 
        border-radius: 16px; 
        box-shadow: var(--card-shadow); 
        display: flex; 
        align-items: center; 
        gap: 1.2rem; 
        transition: var(--transition);
        border: 1px solid transparent;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        border-color: var(--light-purple);
    }

    .stat-card .icon { 
        font-size: 24px; 
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px; 
    }

    .stat-card .icon.purple { background-color: var(--light-purple); color: var(--primary-purple); }
    .stat-card .icon.red { background-color: #ffebee; color: #e53935; }
    .stat-card .icon.green { background-color: #e8f5e9; color: #43a047; }
    .stat-card .icon.orange { background-color: #fff3e0; color: #fb8c00; }
    .stat-card .icon.blue { background-color: #e3f2fd; color: #1e88e5; }

    .stat-card h3 { 
        font-size: 13px; 
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--text-secondary-light); 
        margin-bottom: 4px; 
    }

    .stat-card .value { font-size: 24px; font-weight: 800; color: #1e293b; }
    .stat-card .change { font-size: 12px; font-weight: 600; }

    .pos-layout { 
        display: grid; 
        grid-template-columns: 1fr; 
        gap: 1.5rem; 
        align-items: flex-start; 
    }

    @media (min-width: 1200px) { 
        .pos-layout { grid-template-columns: 1.8fr 1.2fr; } 
    }

    .pos-main, .pos-sidebar { 
        background: #fff; 
        padding: 2rem; 
        border-radius: 20px; 
        box-shadow: var(--card-shadow); 
        border: 1px solid rgba(226, 232, 240, 0.6);
    }

    .pos-main h4, .pos-sidebar h4 {
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1rem;
    }

    .form-row { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); 
        gap: 1.5rem; 
        margin-bottom: 1.5rem; 
        align-items: flex-end; 
    }

    .form-control {
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        padding: 12px 16px;
        font-size: 14px;
        background-color: #f8fafc;
    }

    .form-control:focus {
        border-color: var(--primary-purple);
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(111, 66, 193, 0.1);
    }

    /* Fix Input Groups Alignment */
    .input-group {
        display: flex !important;
        flex-wrap: nowrap !important;
        align-items: center;
    }

    .customer-field .form-control { 
        border-radius: 12px 0 0 12px !important; 
        flex: 1;
    }
    .customer-field .btn { 
        border-radius: 0 12px 12px 0 !important;
        display: flex;
        align-items: center;
    }
    
    .product-search-bar { margin-top: 1rem; }
    .product-search-bar input { 
        border-radius: 12px 0 0 12px !important; 
        height: 50px;
        flex: 1;
    }
    .product-search-bar .btn { 
        background-color: var(--primary-purple); 
        border: none; 
        border-radius: 0 12px 12px 0 !important;
        height: 50px;
        padding: 0 20px;
        font-weight: 600;
        white-space: nowrap;
        color: #fff;
    }

    .items-table table thead th {
        background: #f8fafc;
        border: none;
        color: #64748b;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 15px 10px;
    }

    .items-table td { padding: 15px 10px; vertical-align: middle; border-bottom: 1px solid #f1f5f9; }
    .items-table .product-cell img { width: 40px; height: 40px; border-radius: 6px; object-fit: cover; }

    /* Fix +/- Buttons from wrapping */
    .quantity-control-group {
        width: 110px !important;
    }
    .quantity-control-group .btn {
        padding: 5px 10px;
        border: 1px solid #e2e8f0;
        background: #fff;
    }
    .quantity-control-group .form-control {
        padding: 5px !important;
        height: 34px;
    }

    .summary-row {
    display: flex;
    justify-content: left;
    gap: 250px;
    margin-bottom: 1.2rem;
    font-size: 15px;
    color: #475569;
    align-items: center;
}

    .summary-row span:first-child {padding-right: 10px; white-space: nowrap; }
    .summary-row .input-group { width: 150px; }
    .summary-row .input-group-text { background-color: transparent; border-right: 0; color: var(--text-secondary-light); }
    .summary-row .form-control { text-align: right; border-left: 0; }
    
    .payment-methods .form-check {
        padding: 0;
        margin-bottom: 0.8rem;
    }
    .payment-methods { margin-bottom: 2rem; }
    .payment-methods .form-check-input {
        display: none;
    }
    .payment-methods .form-check-label {
        display: block;
        background: #f8fafc;
        border: 2px solid #f1f5f9;
        padding: 12px 16px;
        border-radius: 12px;
        width: 100%;
        cursor: pointer;
        transition: var(--transition);
        font-weight: 600;
    }

    .payment-methods .form-check-input:checked + .form-check-label {
        background: var(--light-purple);
        border-color: var(--primary-purple);
        color: var(--primary-purple);
    }

    .action-buttons { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); 
        gap: 1rem; 
        margin-top: 2rem; 
    }

    .btn {
        padding: 10px 15px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 14px;
        transition: var(--transition);
    }
    table {
    width: 100%;
}

    .payment-methods {
    margin-bottom: 2rem;
    margin-top: 2rem;
}

    .btn-primary { 
        background: linear-gradient(135deg, var(--primary-purple) 0%, #5a2dab 100%); 
        border: none;
        box-shadow: 0 4px 12px rgba(111, 66, 193, 0.2);
        color: #fff;
    }
    .btn-secondery { 
        background: linear-gradient(135deg, var(--primary-purple) 0%, #5a2dab 100%); 
        border: none;
        box-shadow: 0 4px 12px rgba(111, 66, 193, 0.2);
    }
    
    .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 15px rgba(111, 66, 193, 0.3); }
    
    .btn-outline-primary { border: 1px solid var(--primary-purple); color: var(--primary-purple); background: #fff; }
    .btn-outline-secondary { border: 1px solid #e2e8f0; color: #64748b; background: #fff; }

    .btn-clear-all { color: var(--danger-color); border-color: var(--danger-color); }
    .btn-clear-all:hover { background-color: var(--danger-color); color: #fff; }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <div class="header-stats">
            <div class="stat-card"><div class="icon purple"><i class="fas fa-shopping-bag"></i></div><div><h3>Total Sales</h3><p class="value">৳45,750</p><span class="text-success change"><i class="fas fa-arrow-up"></i> 12.5%</span></div></div>
            <div class="stat-card"><div class="icon red"><i class="fas fa-shopping-bag"></i></div><div><h3>Total Cost</h3><p class="value">৳32,250</p><span class="text-success change"><i class="fas fa-arrow-up"></i> 8.2%</span></div></div>
            <div class="stat-card"><div class="icon green"><i class="fas fa-chart-line"></i></div><div><h3>Total Profit</h3><p class="value">৳13,500</p><span class="text-success change"><i class="fas fa-arrow-up"></i> 15.7%</span></div></div>
            <div class="stat-card"><div class="icon orange"><i class="fas fa-wallet"></i></div><div style="min-width: 0;"><h3>Total Due</h3><p class="value" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">৳8,250</p><span class="text-danger change"><i class="fas fa-arrow-down"></i> 5.3%</span></div></div>
            <div class="stat-card"><div class="icon blue"><i class="fas fa-file-invoice"></i></div><div><h3>Total Invoices</h3><p class="value">125</p><span class="text-success change"><i class="fas fa-plus"></i> 10</span></div></div>
        </div>

        <form id="pos-form" action="sale_process.php" method="POST">
            <div class="pos-layout">
                <div class="pos-main">
                    <h4>Create New Sale / Invoice</h4>
                    <hr class="my-3">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Customer *</label>
                            <div class="input-group customer-field">
                                <select name="customer_id" class="form-control" required>
                                    <?php foreach($customers as $customer): ?>
                                    <option value="<?= $customer['id'] ?>"><?= htmlspecialchars($customer['name']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append"><a href="customer_add.php" class="btn btn-primary">+</a></div>
                            </div>
                        </div>
                        <div class="form-group"><label>Invoice No.</label><input type="text" name="invoice_no" class="form-control" value="<?= $invoice_number ?>" readonly></div>
                        <div class="form-group"><label>Invoice Date</label><input type="date" name="invoice_date" class="form-control" value="<?= date('Y-m-d') ?>"></div>
                    </div>

                    <div class="input-group product-search-bar mb-3">
                        <input type="text" id="product-search-input" class="form-control" placeholder="Search product by name or scan barcode">
                        <div class="input-group-append"><button type="button" id="add-product-btn" class="btn btn-primary">Add Product</button></div>
                    </div>

                    <div class="items-table table-responsive">
                        <table class="table">
                            <thead><tr><th>#</th><th>Product</th><th>SKU</th><th>Price</th><th>Quantity</th><th>Discount</th><th>Total</th><th>Action</th></tr></thead>
                            <tbody id="cart-items-table"></tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <button type="button" id="clear-all-btn" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i> Clear All</button>
                        <div class="form-group w-50"><label>Additional Note</label><textarea name="notes" class="form-control" rows="2"></textarea></div>
                    </div>
                </div>

                <div class="pos-sidebar">
                    <h4>Invoice Summary</h4>
                    <hr class="my-3">
                    <div class="summary-row"><span>Subtotal</span><span id="summary-subtotal">৳0.00</span></div>
                    <div class="summary-row"><span>Discount</span><div class="input-group"><span class="input-group-text">৳</span><input type="number" name="discount" id="summary-discount" class="form-control" value="0"></div></div>
                    <div class="summary-row"><span>Tax (0%)</span><span id="summary-tax">৳0.00</span></div>
                    <div class="summary-row"><span>Shipping</span><div class="input-group"><span class="input-group-text">৳</span><input type="number" name="shipping" id="summary-shipping" class="form-control" value="0"></div></div>
                    <hr>
                    <div class="summary-row font-weight-bold h5"><span>Total Amount</span><span id="summary-total">৳0.00</span></div>
                    <div class="summary-row"><span>Paid Amount</span><div class="input-group"><span class="input-group-text">৳</span><input type="number" name="paid_amount" id="summary-paid" class="form-control" value="0"></div></div>
                    <div class="summary-row font-weight-bold"><span id="due-label">Due Amount</span><span id="summary-due">৳0.00</span></div>

                    <h4 class="mt-4">Payment Method</h4>
                    <hr class="my-3">
                    <div class="payment-methods">
                        <div class="form-check"><input type="radio" name="payment_method" value="Cash" id="pay-cash" class="form-check-input" checked><label for="pay-cash" class="form-check-label">Cash</label></div>
                        <div class="form-check"><input type="radio" name="payment_method" value="bKash" id="pay-bkash" class="form-check-input"><label for="pay-bkash" class="form-check-label">bKash</label></div>
                        <div class="form-check"><input type="radio" name="payment_method" value="Nagad" id="pay-nagad" class="form-check-input"><label for="pay-nagad" class="form-check-label">Nagad</label></div>
                        <div class="form-check"><input type="radio" name="payment_method" value="Card" id="pay-card" class="form-check-input"><label for="pay-card" class="form-check-label">Card</label></div>
                        <div class="form-check"><input type="radio" name="payment_method" value="Bank Transfer" id="pay-bank" class="form-check-input"><label for="pay-bank" class="form-check-label">Bank Transfer</label></div>
                    </div>

                    <div class="action-buttons">
                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                        <button type="submit" name="status" value="Draft" class="btn btn-outline-primary">Save Draft</button>
                        <button type="button" class="btn btn-primary">Print</button>
                        <button type="submit" name="status" value="Completed" class="btn btn-primary"><i class="fas fa-check-circle mr-1"></i> Complete Sale</button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="cart_json" id="cart-json-input">
        </form>
    </div>
</main>

<script>
// The Javascript remains the same as the previous version.
// It handles cart logic and calculations.
document.addEventListener('DOMContentLoaded', function() {
    const products = <?= json_encode($products) ?>;
    const cart = {};

    const searchInput = document.getElementById('product-search-input');
    const addBtn = document.getElementById('add-product-btn');
    const cartTable = document.getElementById('cart-items-table');
    const clearBtn = document.getElementById('clear-all-btn');
    
    function findProduct() {
        const query = searchInput.value.toLowerCase();
        if (!query) return;
        const product = products.find(p => p.name.toLowerCase().includes(query) || p.sku.toLowerCase() === query);
        if (product) { addProductToCart(product); searchInput.value = ''; } else { alert('Product not found!'); }
    }

    addBtn.addEventListener('click', findProduct);
    searchInput.addEventListener('keypress', e => { if (e.key === 'Enter') { e.preventDefault(); findProduct(); } });

    function addProductToCart(product) {
        if (cart[product.id]) { cart[product.id].quantity++; } else { cart[product.id] = { data: product, quantity: 1, discount: 0 }; }
        renderCart();
    }

    function renderCart() {
        cartTable.innerHTML = '';
        let serial = 1;
        for (const id in cart) {
            const item = cart[id];
            const price = parseFloat(item.data.price);
            const total = (price * item.quantity) - item.discount;
            const row = `
                <tr>
                    <td>${serial++}</td>
                    <td class="d-flex align-items-center"><img src="${item.data.image || './assets/images/default-product.png'}" alt="${item.data.name}" width="40" height="40" class="mr-2 rounded">${item.data.name}</td>
                    <td>${item.data.sku}</td>
                    <td>${price.toFixed(2)}</td>
                    <td>
                        <div class="input-group quantity-control-group">
                           <div class="input-group-prepend"><button type="button" class="btn btn-sm" onclick="updateQuantity(${id}, -1)">-</button></div>
                           <input type="text" class="form-control form-control-sm text-center" value="${item.quantity}" onchange="setQuantity(${id}, this.value)">
                           <div class="input-group-append"><button type="button" class="btn btn-sm" onclick="updateQuantity(${id}, 1)">+</button></div>
                        </div>
                    </td>
                    <td><input type="number" class="form-control form-control-sm" style="width: 80px;" value="${item.discount}" onchange="setItemDiscount(${id}, this.value)"></td>
                    <td>${total.toFixed(2)}</td>
                    <td><a class="text-danger" style="cursor: pointer;" onclick="removeFromCart(${id})"><i class="fas fa-trash"></i></a></td>
                </tr>
            `;
            cartTable.innerHTML += row;
        }
        calculateSummary();
        updateCartJson();
    }
    
    window.updateQuantity = (id, change) => { if (cart[id]) { cart[id].quantity += change; if (cart[id].quantity <= 0) delete cart[id]; renderCart(); } };
    window.setQuantity = (id, qty) => { if (cart[id]) { cart[id].quantity = parseInt(qty) || 1; if(cart[id].quantity <= 0) delete cart[id]; renderCart(); } };
    window.setItemDiscount = (id, val) => { if (cart[id]) { cart[id].discount = parseFloat(val) || 0; renderCart(); } };
    window.removeFromCart = (id) => { if (cart[id]) { delete cart[id]; renderCart(); } };
    clearBtn.addEventListener('click', () => { for(const id in cart) delete cart[id]; renderCart(); });

    function calculateSummary() {
        let subtotal = 0, itemDiscounts = 0;
        for (const id in cart) { subtotal += cart[id].data.price * cart[id].quantity; itemDiscounts += cart[id].discount; }
        
        const totalDiscount = (parseFloat(document.getElementById('summary-discount').value) || 0) + itemDiscounts;
        const shipping = parseFloat(document.getElementById('summary-shipping').value) || 0;
        const paid = parseFloat(document.getElementById('summary-paid').value) || 0;
        const total = subtotal - totalDiscount + shipping;
        const due = total - paid;

        document.getElementById('summary-subtotal').textContent = `৳${subtotal.toFixed(2)}`;
        document.getElementById('summary-total').textContent = `৳${total.toFixed(2)}`;
        const dueEl = document.getElementById('summary-due');
        const dueLabelEl = document.getElementById('due-label');
        dueEl.textContent = `৳${due.toFixed(2)}`;
        
        if (due <= 0) {
            dueEl.parentElement.classList.remove('text-danger');
            dueEl.parentElement.classList.add('text-success');
            dueLabelEl.textContent = "Change";
            dueEl.textContent = `৳${Math.abs(due).toFixed(2)}`;
        } else {
            dueEl.parentElement.classList.add('text-danger');
            dueEl.parentElement.classList.remove('text-success');
            dueLabelEl.textContent = "Due Amount";
        }
    }

    ['summary-discount', 'summary-shipping', 'summary-paid'].forEach(id => document.getElementById(id).addEventListener('input', calculateSummary));

    function updateCartJson() {
        const simplifiedCart = {};
        for (const id in cart) { simplifiedCart[id] = { price: cart[id].data.price, quantity: cart[id].quantity, discount: cart[id].discount }; }
        document.getElementById('cart-json-input').value = JSON.stringify(simplifiedCart);
    }
    
    renderCart();
});
</script>

</body>
</html>