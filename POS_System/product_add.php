<?php
$page_title = "Add Product";
include('common/sidebar.php');
require_once './config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $stmt = $conn->prepare("INSERT INTO products (name, category_id, price, stock) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sidi", $name, $category_id, $price, $stock);

    if ($stmt->execute()) {
        echo "<script>alert('Product added successfully!'); window.location.href = 'products.php';</script>";
    } else {
        echo "<script>alert('Error adding product.');</script>";
    }
}

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
        background: var(--sidebar-active-bg);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
    }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <div class="form-container">
            <div class="form-header">
                <h2>Add New Product</h2>
            </div>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select id="category_id" name="category_id" required>
                        <option value="">Select Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" id="stock" name="stock" required>
                </div>
                <button type="submit" class="btn-submit">Add Product</button>
            </form>
        </div>
    </div>
</main>

</body>
</html>