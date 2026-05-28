<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
$id=(int)($_GET['id']??0);
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $name = trim($_POST['name']);
  $cat_id = (int)$_POST['category_id'];
  if($id) $pdo->prepare("UPDATE sub_categories SET name=?, category_id=? WHERE id=?")->execute([$name, $cat_id, $id]);
  else $pdo->prepare("INSERT INTO sub_categories(name, category_id) VALUES(?,?)")->execute([$name, $cat_id]);
  flash('success','Sub Category saved successfully'); redirect('sub_categories.php');
}
if(($_GET['action']??'')==='delete'&&$id){ 
  $pdo->prepare("DELETE FROM sub_categories WHERE id=?")->execute([$id]); 
  flash('success','Sub Category deleted'); redirect('sub_categories.php'); 
}
$cats = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll();
$rows = $pdo->query("SELECT sc.*, c.name as cat_name, (SELECT COUNT(*) FROM products WHERE sub_category_id=sc.id) p_count FROM sub_categories sc LEFT JOIN categories c ON sc.category_id = c.id ORDER BY sc.id DESC")->fetchAll();
$page_title='Sub Categories'; $page_sub='Manage your product sub-categories.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search sub categories..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" onclick="add()"><i class="bi bi-plus-lg"></i> Add New Sub Category</button></div>
<table class="table" id="tbl"><thead><tr><th>ID</th><th>Sub Category Name</th><th>Parent Category</th><th>Total Products</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): ?>
<tr><td>#<?= $r['id'] ?></td><td class="fw-semibold"><?= e($r['name']) ?></td><td><span class="badge bg-light text-dark"><?= e($r['cat_name'] ?? 'Uncategorized') ?></span></td><td><?= $r['p_count'] ?> Products</td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete this sub category?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">Add Sub Category</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-12"><label class="form-label">Parent Category</label>
<select class="form-select" name="category_id" id="f-cat" required>
    <option value="">Select Category</option>
    <?php foreach($cats as $cat): ?>
    <option value="<?= $cat['id'] ?>"><?= e($cat['name']) ?></option>
    <?php endforeach; ?>
</select></div>
<div class="col-12"><label class="form-label">Sub Category Name</label><input class="form-control" name="name" id="f-name" required></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function add(){
    document.getElementById('f-t').textContent='Add Sub Category';
    document.getElementById('f-id').value='';
    document.getElementById('f-name').value='';
    document.getElementById('f-cat').value='';
    new bootstrap.Modal(document.getElementById('m')).show();
}
function edit(r){
    document.getElementById('f-t').textContent='Edit Sub Category';
    document.getElementById('f-id').value=r.id;
    document.getElementById('f-name').value=r.name;
    document.getElementById('f-cat').value=r.category_id;
    new bootstrap.Modal(document.getElementById('m')).show();
}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>