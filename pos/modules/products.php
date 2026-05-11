<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();

$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $name = trim($_POST['name'] ?? '');
    $sku = trim($_POST['sku'] ?? '') ?: ('P-' . (1000 + (int)$pdo->query("SELECT COALESCE(MAX(id), 0) FROM products")->fetchColumn() + 1));
    $barcode = trim($_POST['barcode'] ?? '');
    $cat = (int)($_POST['category_id'] ?? 0) ?: null;
    $sub_cat = (int)($_POST['sub_category_id'] ?? 0) ?: null;
    $brand = (int)($_POST['brand_id'] ?? 0) ?: null;
    $unit = (int)($_POST['unit_id'] ?? 0) ?: null;
    $pp = (float)($_POST['purchase_price'] ?? 0);
    $price = (float)($_POST['price'] ?? 0);
    $stock = (int)($_POST['stock'] ?? 0);
    $status = $_POST['status'] ?? 'active';
    if (!$name) { flash('error','Name required'); redirect('products.php'); }

    // Check for duplicate SKU to avoid PDOException
    $st = $pdo->prepare("SELECT id FROM products WHERE sku = ? AND id != ?");
    $st->execute([$sku, $id]);
    if ($st->fetch()) { flash('error', "The SKU '$sku' is already in use by another product."); redirect('products.php'); }

    if ($id) {
        $pdo->prepare("UPDATE products SET name=?,sku=?,barcode=?,category_id=?,sub_category_id=?,brand_id=?,purchase_price=?,price=?,stock=?,unit_id=?,status=? WHERE id=?")
            ->execute([$name,$sku,$barcode,$cat,$sub_cat,$brand,$pp,$price,$stock,$unit,$status,$id]);
        flash('success','Product updated');
    } else {
        $pdo->prepare("INSERT INTO products(name,sku,barcode,category_id,sub_category_id,brand_id,purchase_price,price,stock,unit_id,status) VALUES(?,?,?,?,?,?,?,?,?,?,?)")
            ->execute([$name,$sku,$barcode,$cat,$sub_cat,$brand,$pp,$price,$stock,$unit,$status]);
        flash('success','Product created');
    }
    redirect('products.php');
}

if ($action === 'delete' && $id) {
    $pdo->prepare("DELETE FROM products WHERE id=?")->execute([$id]);
    flash('success','Product deleted');
    redirect('products.php');
}

$edit = null;
if ($action === 'edit' && $id) {
    $st = $pdo->prepare("SELECT * FROM products WHERE id=?"); $st->execute([$id]); $edit = $st->fetch();
}

$cats = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll();
$sub_cats = $pdo->query("SELECT * FROM sub_categories ORDER BY name")->fetchAll();
$units = $pdo->query("SELECT * FROM units ORDER BY name")->fetchAll();
$brands = $pdo->query("SELECT * FROM brands ORDER BY name")->fetchAll();
$products = $pdo->query("SELECT p.*, c.name AS cat_name, sc.name AS sub_cat_name, u.short_name AS unit_name FROM products p LEFT JOIN categories c ON p.category_id = c.id LEFT JOIN sub_categories sc ON p.sub_category_id = sc.id LEFT JOIN units u ON p.unit_id = u.id ORDER BY p.id DESC")->fetchAll();

$page_title = 'Products';
$page_sub = 'Manage your store products.';
include __DIR__ . '/../includes/header.php';
?>
<div class="table-wrap">
  <div class="toolbar">
    <div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search products..." onkeyup="filterTable(this,'productsTable')"></div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" onclick="resetProductForm()"><i class="bi bi-plus-lg"></i> Add New Product</button>
  </div>
  <table class="table" id="productsTable">
    <thead><tr><th>Image</th><th>Product Name</th><th>SKU</th><th>Category</th><th>Price</th><th>Stock</th><th>Unit</th><th>Status</th><th class="text-end">Action</th></tr></thead>
    <tbody>
    <?php foreach ($products as $p): ?>
      <tr>
        <td><div style="width:36px;height:36px;border-radius:8px;background:#F0EAFF;display:flex;align-items:center;justify-content:center;color:var(--primary)"><i class="bi bi-box"></i></div></td>
        <td class="fw-semibold"><?= e($p['name']) ?></td>
        <td><?= e($p['sku']) ?></td>
        <td><small><?= e($p['cat_name'] ?? '-') ?></small> <br> <span class="text-muted small"><?= e($p['sub_cat_name'] ?? '') ?></span></td>
        <td>৳ <?= number_format($p['price'],2) ?></td>
        <td><?= (int)$p['stock'] ?></td>
        <td><span class="badge bg-light text-dark"><?= e($p['unit_name'] ?? 'Pcs') ?></span></td>
        <td><span class="badge-pill badge-<?= $p['status']==='active'?'active':'inactive' ?>"><?= e(ucfirst($p['status'])) ?></span></td>
        <td class="text-end">
          <a class="btn-icon" href="?action=edit&id=<?= $p['id'] ?>" onclick="event.preventDefault();editProduct(<?= htmlspecialchars(json_encode($p),ENT_QUOTES) ?>)"><i class="bi bi-pencil"></i></a>
          <a class="btn-icon danger" href="?action=delete&id=<?= $p['id'] ?>" onclick="return confirm('Delete this product?')"><i class="bi bi-trash"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="productModal" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post" id="productForm">
<?= csrf_field() ?>
<input type="hidden" name="id" id="pf-id">
<div class="modal-header" style="border:0"><h5 class="modal-title" id="pf-title">Add Product</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body">
  <div class="row g-3">
    <div class="col-md-6"><label class="form-label">Product Name</label><input class="form-control" name="name" id="pf-name" required></div>
    <div class="col-md-3"><label class="form-label">SKU</label><input class="form-control" name="sku" id="pf-sku" placeholder="auto"></div>
    <div class="col-md-3"><label class="form-label">Barcode</label><input class="form-control" name="barcode" id="pf-barcode"></div>
    <div class="col-md-4"><label class="form-label">Category</label><select class="form-select" name="category_id" id="pf-cat"><option value="">Select Category</option><?php foreach($cats as $c): ?><option value="<?= $c['id'] ?>"><?= e($c['name']) ?></option><?php endforeach; ?></select></div>
    <div class="col-md-4"><label class="form-label">Sub Category</label><select class="form-select" name="sub_category_id" id="pf-subcat"><option value="">None</option><?php foreach($sub_cats as $sc): ?><option value="<?= $sc['id'] ?>" data-cat="<?= $sc['category_id'] ?>"><?= e($sc['name']) ?></option><?php endforeach; ?></select></div>
    <div class="col-md-4"><label class="form-label">Unit</label><select class="form-select" name="unit_id" id="pf-unit"><option value="">Select Unit</option><?php foreach($units as $u): ?><option value="<?= $u['id'] ?>"><?= e($u['name']) ?> (<?= e($u['short_name']) ?>)</option><?php endforeach; ?></select></div>
    <div class="col-md-4"><label class="form-label">Brand</label><select class="form-select" name="brand_id" id="pf-brand"><option value="">Select Brand</option><?php foreach($brands as $b): ?><option value="<?= $b['id'] ?>"><?= e($b['name']) ?></option><?php endforeach; ?></select></div>
    <div class="col-md-4"><label class="form-label">Purchase Price</label><input type="number" step="0.01" class="form-control" name="purchase_price" id="pf-pp"></div>
    <div class="col-md-4"><label class="form-label">Selling Price</label><input type="number" step="0.01" class="form-control" name="price" id="pf-price" required></div>
    <div class="col-md-6"><label class="form-label">Stock Qty</label><input type="number" class="form-control" name="stock" id="pf-stock"></div>
    <div class="col-md-6"><label class="form-label">Status</label><select class="form-select" name="status" id="pf-status"><option value="active">Active</option><option value="inactive">Inactive</option></select></div>
  </div>
</div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save Product</button></div>
</form>
</div></div></div>

<script>
function resetProductForm(){
  ['pf-id','pf-name','pf-sku','pf-barcode','pf-pp','pf-price','pf-stock','pf-cat','pf-subcat','pf-unit','pf-brand'].forEach(i=>document.getElementById(i).value='');
  filterSubCats('');
  document.getElementById('pf-title').textContent='Add Product';
}

document.getElementById('pf-cat').addEventListener('change', function() {
    filterSubCats(this.value);
});

function filterSubCats(catId) {
    const subCatSelect = document.getElementById('pf-subcat');
    let matchFound = false;
    Array.from(subCatSelect.options).forEach(opt => {
        if(!opt.value) return;
        const isMatch = (opt.dataset.cat == catId);
        opt.style.display = isMatch ? 'block' : 'none';
        opt.disabled = !isMatch;
        if(isMatch && opt.value == subCatSelect.value) matchFound = true;
    });
    // ক্যাটাগরি পরিবর্তন করলে সাব-ক্যাটাগরি রিসেট করা
    if(!matchFound) subCatSelect.value = '';
}

function editProduct(p){
  document.getElementById('pf-title').textContent='Edit Product';
  document.getElementById('pf-id').value=p.id;
  document.getElementById('pf-name').value=p.name;
  document.getElementById('pf-sku').value=p.sku;
  document.getElementById('pf-barcode').value=p.barcode||'';
  document.getElementById('pf-cat').value=p.category_id||'';
  filterSubCats(p.category_id);
  document.getElementById('pf-subcat').value=p.sub_category_id||'';
  document.getElementById('pf-unit').value=p.unit_id||'';
  document.getElementById('pf-brand').value=p.brand_id||'';
  document.getElementById('pf-status').value=p.status;
  document.getElementById('pf-pp').value=p.purchase_price;
  document.getElementById('pf-price').value=p.price;
  document.getElementById('pf-stock').value=p.stock;
  new bootstrap.Modal(document.getElementById('productModal')).show();
}
function filterTable(input,tableId){
  const q=input.value.toLowerCase();
  document.querySelectorAll('#'+tableId+' tbody tr').forEach(r=>{r.style.display=r.textContent.toLowerCase().includes(q)?'':'none'});
}
<?php if ($edit): ?>document.addEventListener('DOMContentLoaded',()=>editProduct(<?= json_encode($edit) ?>));<?php endif; ?>
</script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
