<?php
$page_title = "Products";
include('common/sidebar.php');
require_once './config/database.php';

if (!hasAccess('products', $permissions, $user_role)) {
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit;
}

// Fetch categories for filter dropdown
$categories = $conn->query("SELECT id, name FROM categories ORDER BY name")->fetch_all(MYSQLI_ASSOC);

// Filtering logic
$where_clauses = [];
$search = $_GET['search'] ?? '';
$category_filter = $_GET['category'] ?? '';
$status_filter = $_GET['status'] ?? '';

if ($search) {
    $where_clauses[] = "(p.name LIKE '%$search%' OR p.sku LIKE '%$search%')";
}
if ($category_filter) {
    $where_clauses[] = "p.category_id = $category_filter";
}
if ($status_filter !== '') {
    $where_clauses[] = "p.status = $status_filter";
}

$where_sql = count($where_clauses) > 0 ? "WHERE " . implode(' AND ', $where_clauses) : "";

// Pagination logic
$limit = 8;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$total_result = $conn->query("SELECT COUNT(p.id) as total FROM products p $where_sql");
$total_products = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_products / $limit);

$sql = "SELECT p.*, c.name as category_name 
        FROM products p 
        LEFT JOIN categories c ON p.category_id = c.id 
        $where_sql
        ORDER BY p.id DESC 
        LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<style>
    :root {
        --primary-purple: #6f42c1;
        --light-purple: #f3eefc;
        --border-color-light: #e9ecef;
        --card-shadow: 0 10px 25px rgba(0,0,0,0.05);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .main-content { 
        background-color: #F8FAFC; 
        padding: 1.5rem;
    }

    .page-header { 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        margin-bottom: 2rem; 
    }

    .page-header h2 {
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 0;
    }

    .page-header p {
        color: #64748b;
        font-size: 0.95rem;
    }

    table {
    width: 100%;
}

    .btn-primary { 
        background: linear-gradient(135deg, var(--primary-purple) 0%, #5a2dab 100%); 
        border: none;
        padding: 10px 20px;
        border-radius: 12px;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(111, 66, 193, 0.2);
        transition: var(--transition);
        color: #fff;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(111, 66, 193, 0.3);
    }

    .card-main { 
        background: #fff; 
        border-radius: 20px; 
        box-shadow: var(--card-shadow); 
        padding: 2rem; 
        border: 1px solid rgba(226, 232, 240, 0.6);
    }

    .filter-bar { 
        display: flex; 
        gap: 1rem; 
        margin-bottom: 2rem; 
        background: #f8fafc;
        padding: 1.5rem;
        border-radius: 16px;
        border: 1px solid #f1f5f9;
    }

    .search-box { flex-grow: 1; }
    
    .form-control {
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        padding: 10px 15px;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: var(--primary-purple);
        box-shadow: 0 0 0 3px rgba(111, 66, 193, 0.1);
    }
    .btn-secondery { 
        background: linear-gradient(135deg, var(--primary-purple) 0%, #5a2dab 100%); 
        border: none;
        box-shadow: 0 4px 12px rgba(111, 66, 193, 0.2);
    }

    .table thead th { 
        background: #f8fafc;
        border: none;
        color: #64748b;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 15px 10px;
    }

    .table td { padding: 15px 10px; vertical-align: middle; border-bottom: 1px solid #f1f5f9; }
    
    .product-cell { display: flex; align-items: center; gap: 10px; }
    .product-name { font-weight: 600; color: #1e293b; }

    .badge { padding: 6px 12px; border-radius: 8px; font-weight: 600; font-size: 11px; }
    .bg-light-success { background: #e8f5e9; color: #2e7d32; }
    .bg-light-danger { background: #ffebee; color: #c62828; }

    .action-icons a { color: #6c757d; margin: 0 5px; }
    .action-icons a:hover { color: var(--primary-purple); }
    a{
        text-decoration: none;
    }
    .pagination-footer { 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid #f1f5f9;
        color: #64748b;
        font-size: 14px;
    }

    .pagination { 
        display: flex; 
        gap: 8px; 
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .pagination .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 36px;
        height: 36px;
        padding: 0 12px;
        border-radius: 10px;
        border: 1px solid #e2e880;
        color: #64748b;
        text-decoration: none;
        transition: var(--transition);
        font-weight: 600;
    }

    .pagination .page-item.active .page-link {
        background: var(--primary-purple);
        color: #fff;
        border-color: var(--primary-purple);
        box-shadow: 0 4px 10px rgba(111, 66, 193, 0.2);
    }

    .pagination .page-item.disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .pagination .page-link:hover:not(.active) {
        background: var(--light-purple);
        color: var(--primary-purple);
        border-color: var(--primary-purple);
    }
</style>

<main class="main-content">
    <?php include('common/header.php'); ?>

    <div class="content-body">
        <div class="page-header">
            <div>
                <h2>Products</h2>
                <p>Manage your store products.</p>
            </div>
            <a href="product_add.php" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Product</a>
        </div>

        <div class="card-main">
            <form method="GET" action="products.php">
                <div class="filter-bar">
                    <div class="search-box">
                        <input type="text" name="search" class="form-control" placeholder="Search product by name, SKU or barcode..." value="<?= htmlspecialchars($search) ?>">
                    </div>
                    <select name="category" class="form-control" style="width: 200px;">
                        <option value="">All Categories</option>
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?= $cat['id'] ?>" <?= $category_filter == $cat['id'] ? 'selected' : '' ?>><?= htmlspecialchars($cat['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select name="status" class="form-control" style="width: 150px;">
                        <option value="">All Status</option>
                        <option value="1" <?= (string)$status_filter === '1' ? 'selected' : '' ?>>Active</option>
                        <option value="0" <?= (string)$status_filter === '0' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                    <button type="submit" class="btn btn-secondary">Filter</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th>Product</th>
                            <th>SKU</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php $row_num = $offset + 1; while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $row_num++ ?></td>
                                    <td><span class="product-name"><?= htmlspecialchars($row['name']) ?></span></td>
                                    <td><code class="text-muted"><?= htmlspecialchars($row['sku'] ?? 'N/A') ?></code></td>
                                    <td><?= htmlspecialchars($row['category_name']) ?></td>
                                    <td>৳<?= htmlspecialchars($row['sales_price']) ?></td>
                                    <td><span class="font-weight-bold"><?= htmlspecialchars($row['current_stock']) ?></span></td>
                                    <td><span class="badge <?= ($row['status'] ?? 1) == 1 ? 'bg-light-success' : 'bg-light-danger' ?>"><?= ($row['status'] ?? 1) == 1 ? 'Active' : 'Inactive' ?></span></td>
                                    <td class="action-icons text-right">
                                        <a href="product_edit.php?id=<?= $row['id'] ?>"><i class="fas fa-edit"></i></a>
                                        <a href="product_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this product?');"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="8" class="text-center">No products found.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="pagination-footer">
                <div>Showing <?= $offset + 1 ?> to <?= min($offset + $limit, $total_products) ?> of <?= $total_products ?> results</div>
                <nav>
                    <ul class="pagination">
                        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page - 1 ?>&search=<?= $search ?>&category=<?= $category_filter ?>&status=<?= $status_filter ?>">&lt;</a>
                        </li>
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>&search=<?= $search ?>&category=<?= $category_filter ?>&status=<?= $status_filter ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page + 1 ?>&search=<?= $search ?>&category=<?= $category_filter ?>&status=<?= $status_filter ?>">&gt;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>

</body>
</html>