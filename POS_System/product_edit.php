<?php
$page_title = "Edit Product";
include('common/sidebar.php');
require_once './config/database.php';

if (!isset($_GET['id'])) {
    echo "<script>window.location.href = 'products.php';</script>";
    exit;
}

$product_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $stmt = $conn->prepare("UPDATE products SET name = ?, category_id = ?, price = ?, stock = ? WHERE id = ?");
    $stmt->bind_param("sidii", $name, $category_id, $price, $stock, $product_id);

    if ($stmt->execute()) {
        echo "<script>alert('Product updated successfully!'); window.location.href = 'products.php';</script>";
    } else {
        echo "<script>alert('Error updating product.');</script>";
    }
}

$product = $conn->query("SELECT * FROM products WHERE id = $product_id")->fetch_assoc();
$categories = $conn->query("SELECT * FROM categories ORDER BY name")->fetch_all(MYSQLI_ASSOC);
?>

<style>
    .form-container {
        background: var(--card-bg);
        padding: 2rem;
        border-radius: 12px;
    }

    .form-header {
        margin-bottom: 1.5rem;
    }

    .form-header h2 {
        font-size: 20px;
        font-weight: 600;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 500;
        color: var(--text-primary);
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
    }

    .btn-submit {
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
    }
    .btn-primary { 
        background: linear-gradient(135deg, var(--primary-purple) 0%, #5a2dab 100%); 
        border: none;
        padding: 10px 20px;
        border-radius: 12px;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(111, 66, 193, 0.2);
        transition: var(--transition);
        color: #000;
    }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <div class="form-container">
            <div class="form-header">
                <h2>Edit Product</h2>
            </div>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select id="category_id" name="category_id" required>
                        <option value="">Select Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category['id'] ?>" <?= $product['category_id'] == $category['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($category['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" step="0.01" value="<?= $product['sales_price'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" id="stock" name="stock" value="<?= $product['current_stock'] ?>" required>
                </div>
                <button type="submit" class="btn-submit btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</main>

</body>
</html>