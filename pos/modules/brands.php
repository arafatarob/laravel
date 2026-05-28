<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
$id=(int)($_GET['id']??0);
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $name = trim($_POST['name']);
  if($id) $pdo->prepare("UPDATE brands SET name=? WHERE id=?")->execute([$name,$id]);
  else $pdo->prepare("INSERT INTO brands(name) VALUES(?)")->execute([$name]);
  flash('success','Brand saved successfully'); redirect('brands.php');
}
if(($_GET['action']??'')==='delete'&&$id){ 
  $pdo->prepare("DELETE FROM brands WHERE id=?")->execute([$id]); 
  flash('success','Brand deleted'); redirect('brands.php'); 
}
$rows = $pdo->query("SELECT b.*, (SELECT COUNT(*) FROM products WHERE brand_id=b.id) p_count FROM brands b ORDER BY b.id DESC")->fetchAll();
$page_title='Brands'; $page_sub='Manage your product brands.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search brands..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" onclick="add()"><i class="bi bi-plus-lg"></i> Add New Brand</button></div>
<table class="table" id="tbl"><thead><tr><th>ID</th><th>Brand Name</th><th>Total Products</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): ?>
<tr><td>#<?= $r['id'] ?></td><td class="fw-semibold"><?= e($r['name']) ?></td><td><?= $r['p_count'] ?> Products</td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete this brand?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">Add Brand</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-12"><label class="form-label">Brand Name</label><input class="form-control" name="name" id="f-name" required></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function add(){document.getElementById('f-t').textContent='Add Brand';document.getElementById('f-id').value='';document.getElementById('f-name').value='';new bootstrap.Modal(document.getElementById('m')).show();}
function edit(r){document.getElementById('f-t').textContent='Edit Brand';document.getElementById('f-id').value=r.id;document.getElementById('f-name').value=r.name;new bootstrap.Modal(document.getElementById('m')).show();}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>