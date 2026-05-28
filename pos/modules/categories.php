<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
$id=(int)($_GET['id']??0);
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $name = trim($_POST['name']);
  if($id) $pdo->prepare("UPDATE categories SET name=? WHERE id=?")->execute([$name,$id]);
  else $pdo->prepare("INSERT INTO categories(name) VALUES(?)")->execute([$name]);
  flash('success','Category saved successfully'); redirect('categories.php');
}
if(($_GET['action']??'')==='delete'&&$id){ 
  $pdo->prepare("DELETE FROM categories WHERE id=?")->execute([$id]); 
  flash('success','Category deleted'); redirect('categories.php'); 
}
$rows = $pdo->query("SELECT c.*, (SELECT COUNT(*) FROM products WHERE category_id=c.id) p_count FROM categories c ORDER BY c.id DESC")->fetchAll();
$page_title='Categories'; $page_sub='Manage your product categories.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search categories..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" onclick="add()"><i class="bi bi-plus-lg"></i> Add New Category</button></div>
<table class="table" id="tbl"><thead><tr><th>ID</th><th>Category Name</th><th>Total Products</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): ?>
<tr><td>#<?= $r['id'] ?></td><td class="fw-semibold"><?= e($r['name']) ?></td><td><?= $r['p_count'] ?> Products</td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete this category?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">Add Category</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-12"><label class="form-label">Category Name</label><input class="form-control" name="name" id="f-name" required></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function add(){document.getElementById('f-t').textContent='Add Category';document.getElementById('f-id').value='';document.getElementById('f-name').value='';new bootstrap.Modal(document.getElementById('m')).show();}
function edit(r){document.getElementById('f-t').textContent='Edit Category';document.getElementById('f-id').value=r.id;document.getElementById('f-name').value=r.name;new bootstrap.Modal(document.getElementById('m')).show();}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>