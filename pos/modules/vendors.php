<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
$id=(int)($_GET['id']??0);
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $d=[trim($_POST['name']),trim($_POST['company']??''),trim($_POST['phone']??''),trim($_POST['email']??''),trim($_POST['address']??'')];
  if($id) $pdo->prepare("UPDATE vendors SET name=?,company=?,phone=?,email=?,address=? WHERE id=?")->execute([...$d,$id]);
  else $pdo->prepare("INSERT INTO vendors(name,company,phone,email,address) VALUES(?,?,?,?,?)")->execute($d);
  flash('success','Saved'); redirect('vendors.php');
}
if(($_GET['action']??'')==='delete'&&$id){ $pdo->prepare("DELETE FROM vendors WHERE id=?")->execute([$id]); redirect('vendors.php'); }
$rows = $pdo->query("SELECT v.*, COALESCE(SUM(p.total),0) total_purchase FROM vendors v LEFT JOIN purchases p ON p.vendor_id=v.id GROUP BY v.id ORDER BY v.id DESC")->fetchAll();
$page_title='Vendors'; $page_sub='Manage your vendors.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search vendors..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" onclick="add()"><i class="bi bi-plus-lg"></i> Add New Vendor</button></div>
<table class="table" id="tbl"><thead><tr><th>Vendor</th><th>Company</th><th>Phone</th><th>Email</th><th>Total Purchase</th><th>Due</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): ?>
<tr><td class="fw-semibold"><?= e($r['name']) ?></td><td><?= e($r['company']) ?></td><td><?= e($r['phone']) ?></td><td><?= e($r['email']) ?></td><td>৳ <?= number_format($r['total_purchase'],2) ?></td><td>৳ <?= number_format($r['due'],2) ?></td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">Add Vendor</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-6"><label class="form-label">Vendor Name</label><input class="form-control" name="name" id="f-name" required></div>
<div class="col-6"><label class="form-label">Company</label><input class="form-control" name="company" id="f-company"></div>
<div class="col-6"><label class="form-label">Phone</label><input class="form-control" name="phone" id="f-phone"></div>
<div class="col-6"><label class="form-label">Email</label><input class="form-control" name="email" id="f-email"></div>
<div class="col-12"><label class="form-label">Address</label><textarea class="form-control" name="address" id="f-addr"></textarea></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function add(){document.getElementById('f-t').textContent='Add Vendor';document.querySelectorAll('#m input,#m textarea').forEach(i=>i.value='');new bootstrap.Modal(document.getElementById('m')).show();}
function edit(r){document.getElementById('f-t').textContent='Edit Vendor';['id','name','company','phone','email'].forEach(k=>document.getElementById('f-'+k).value=r[k]||'');document.getElementById('f-addr').value=r.address||'';new bootstrap.Modal(document.getElementById('m')).show();}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>
