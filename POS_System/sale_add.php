<?php
$page_title = "New Sale";
include('common/sidebar.php');
require_once './config/database.php';

if (!hasAccess('sales', $permissions, $user_role)) {
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit;
}

$products = $conn->query("SELECT id, name, price, stock FROM products WHERE stock > 0 ORDER BY name")->fetch_all(MYSQLI_ASSOC);
$customers = $conn->query("SELECT id, name FROM customers ORDER BY name")->fetch_all(MYSQLI_ASSOC);
?>

<style>
    .pos-container {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
        height: calc(100vh - 100px);
    }

    .product-selection, .cart-summary {
        background: var(--card-bg);
        padding: 1.5rem;
        border-radius: 12px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    #product-search {
        width: 100%;
        padding: 10px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        margin-bottom: 1rem;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 1rem;
        overflow-y: auto;
        padding-right: 10px;
    }

    .product-card {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 10px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .product-card:hover {
        border-color: var(--sidebar-active-bg);
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .product-card h5 {
        font-size: 14px;
        margin: 5px 0;
    }

    .product-card p {
        font-size: 12px;
        color: var(--text-secondary);
    }

    .cart-items {
        flex-grow: 1;
        overflow-y: auto;
    }

    .cart-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
    }

    .cart-total {
        border-top: 2px solid var(--border-color);
        padding-top: 1rem;
        margin-top: 1rem;
    }

    .btn-complete-sale {
        width: 100%;
        padding: 15px;
        background: var(--sidebar-active-bg);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 1rem;
    }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <form id="sale-form" method="POST" action="sale_process.php">
            <div class="pos-container">
                <div class="product-selection">
                    <input type="text" id="product-search" placeholder="Search products...">
                    <div class="product-grid">
                        <?php foreach ($products as $product) : ?>
                            <div class="product-card" data-id="<?= $product['id'] ?>" data-name="<?= htmlspecialchars($product['name']) ?>" data-price="<?= $product['price'] ?>">
                                <h5><?= htmlspecialchars($product['name']) ?></h5>
                                <p>৳<?= number_format($product['price'], 2) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="cart-summary">
                    <h4>Order Details</h4>
                    <div class="form-group">
                        <label for="customer_id">Customer</label>
                        <select id="customer_id" name="customer_id" class="form-control" required>
                            <?php foreach ($customers as $customer) : ?>
                                <option value="<?= $customer['id'] ?>"><?= htmlspecialchars($customer['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <hr>
                    <div class="cart-items" id="cart-items">
                        <!-- Cart items will be added here by JS -->
                    </div>
                    <div class="cart-total">
                        <div class="d-flex justify-content-between">
                            <strong>Subtotal:</strong>
                            <span id="subtotal">৳0.00</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <strong>Total:</strong>
                            <span id="total">৳0.00</span>
                        </div>
                    </div>
                    <input type="hidden" name="cart_data" id="cart_data">
                    <button type="submit" class="btn-complete-sale">Complete Sale</button>
                </div>
            </div>
        </form>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const productGrid = document.querySelector('.product-grid');
    const cartItemsContainer = document.getElementById('cart-items');
    const cart = {};

    productGrid.addEventListener('click', function(e) {
        const card = e.target.closest('.product-card');
        if (card) {
            const productId = card.dataset.id;
            const productName = card.dataset.name;
            const productPrice = parseFloat(card.dataset.price);

            if (cart[productId]) {
                cart[productId].quantity++;
            } else {
                cart[productId] = { name: productName, price: productPrice, quantity: 1 };
            }
            updateCart();
        }
    });

    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let subtotal = 0;

        for (const id in cart) {
            const item = cart[id];
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;

            const cartItemEl = document.createElement('div');
            cartItemEl.classList.add('cart-item');
            cartItemEl.innerHTML = `
                <div>
                    <strong>${item.name}</strong><br>
                    <small>৳${item.price.toFixed(2)} x ${item.quantity}</small>
                </div>
                <strong>৳${itemTotal.toFixed(2)}</strong>
            `;
            cartItemsContainer.appendChild(cartItemEl);
        }

        document.getElementById('subtotal').textContent = `৳${subtotal.toFixed(2)}`;
        document.getElementById('total').textContent = `৳${subtotal.toFixed(2)}`;
        document.getElementById('cart_data').value = JSON.stringify(cart);
    }

    document.getElementById('product-search').addEventListener('keyup', function() {
        const filter = this.value.toLowerCase();
        const cards = document.querySelectorAll('.product-card');
        cards.forEach(card => {
            if (card.dataset.name.toLowerCase().includes(filter)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>

</body>
</html>