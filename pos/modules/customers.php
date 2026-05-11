<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
$id = (int)($_GET['id'] ?? 0);
if ($_SERVER['REQUEST_METHOD']==='POST'){
  verify_csrf();
  $d=[trim($_POST['name']),trim($_POST['phone']??''),trim($_POST['email']??''),trim($_POST['address']??'')];
  if($id){ $pdo->prepare("UPDATE customers SET name=?,phone=?,email=?,address=? WHERE id=?")->execute([...$d,$id]); flash('success','Customer updated'); }
  else { $pdo->prepare("INSERT INTO customers(name,phone,email,address) VALUES(?,?,?,?)")->execute($d); flash('success','Customer added'); }
  redirect('customers.php');
}
if(($_GET['action']??'')==='delete' && $id){ $pdo->prepare("DELETE FROM customers WHERE id=?")->execute([$id]); flash('success','Deleted'); redirect('customers.php'); }
$rows = $pdo->query("SELECT c.*, COALESCE(SUM(s.total),0) total_sales FROM customers c LEFT JOIN sales s ON s.customer_id=c.id GROUP BY c.id ORDER BY c.id DESC")->fetchAll();
$page_title='Customers'; $page_sub='Manage your customers.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search customers..." onkeyup="filterTable(this,'tbl')"></div>
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m"><i class="bi bi-plus-lg"></i> Add New Customer</button></div>
<table class="table" id="tbl"><thead><tr><th>Name</th><th>Phone</th><th>Email</th><th>Total Sales</th><th>Due</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): ?>
<tr><td class="fw-semibold"><?= e($r['name']) ?></td><td><?= e($r['phone']) ?></td><td><?= e($r['email']) ?></td><td>৳ <?= number_format($r['total_sales'],2) ?></td><td>৳ <?= number_format($r['due'],2) ?></td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>

<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">Add Customer</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-12"><label class="form-label">Name</label><input class="form-control" name="name" id="f-name" required></div>
<div class="col-6"><label class="form-label">Phone</label><input class="form-control" name="phone" id="f-phone"></div>
<div class="col-6"><label class="form-label">Email</label><input class="form-control" name="email" id="f-email"></div>
<div class="col-12"><label class="form-label">Address</label><textarea class="form-control" name="address" id="f-addr"></textarea></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function edit(r){document.getElementById('f-t').textContent='Edit Customer';['id','name','phone','email'].forEach(k=>document.getElementById('f-'+k).value=r[k]||'');document.getElementById('f-addr').value=r.address||'';new bootstrap.Modal(document.getElementById('m')).show();}
document.querySelector('[data-bs-target="#m"]').addEventListener('click',()=>{document.getElementById('f-t').textContent='Add Customer';document.querySelectorAll('#m input,#m textarea').forEach(i=>i.value='');});
function filterTable(i,id){const q=i.value.toLowerCase();document.querySelectorAll('#'+id+' tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>
