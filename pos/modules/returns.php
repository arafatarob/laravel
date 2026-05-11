<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $id=(int)($_POST['id']??0);
  $d=[trim($_POST['name']),$_POST['type'],trim($_POST['reason']??''),(float)$_POST['amount'],$_POST['status']];
  if($id) $pdo->prepare("UPDATE returns SET name=?,type=?,reason=?,amount=?,status=? WHERE id=?")->execute([...$d,$id]);
  else { $no=generate_no('RTN','returns','return_no',$pdo); $pdo->prepare("INSERT INTO returns(return_no,name,type,reason,amount,status) VALUES(?,?,?,?,?,?)")->execute([$no,$d[0],$d[1],$d[2],$d[3],$d[4]]); }
  flash('success','Saved'); redirect('returns.php');
}
if(($_GET['action']??'')==='delete'){ $pdo->prepare("DELETE FROM returns WHERE id=?")->execute([(int)$_GET['id']]); redirect('returns.php'); }
$rows=$pdo->query("SELECT * FROM returns ORDER BY id DESC")->fetchAll();
$page_title='Returns'; $page_sub='Manage product returns.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search returns..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" onclick="add()"><i class="bi bi-plus-lg"></i> New Return</button></div>
<table class="table" id="tbl"><thead><tr><th>Return No</th><th>Type</th><th>Name</th><th>Amount</th><th>Status</th><th>Date</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): $b=$r['status']==='approved'?'badge-approved':'badge-pending'; ?>
<tr><td class="fw-semibold"><?= e($r['return_no']) ?></td><td><?= e(ucfirst($r['type'])) ?> Return</td><td><?= e($r['name']) ?></td><td>৳ <?= number_format($r['amount'],2) ?></td>
<td><span class="badge-pill <?= $b ?>"><?= e(ucfirst($r['status'])) ?></span></td><td><?= date('d M, Y',strtotime($r['created_at'])) ?></td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">New Return</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-6"><label class="form-label">Type</label><select class="form-select" name="type" id="f-type"><option value="sales">Sales Return</option><option value="purchase">Purchase Return</option></select></div>
<div class="col-6"><label class="form-label">Status</label><select class="form-select" name="status" id="f-status"><option value="pending">Pending</option><option value="approved">Approved</option></select></div>
<div class="col-12"><label class="form-label">Name</label><input class="form-control" name="name" id="f-name" required></div>
<div class="col-12"><label class="form-label">Amount</label><input type="number" step="0.01" class="form-control" name="amount" id="f-amount" required></div>
<div class="col-12"><label class="form-label">Reason</label><textarea class="form-control" name="reason" id="f-reason"></textarea></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function add(){document.getElementById('f-t').textContent='New Return';document.querySelectorAll('#m input,#m textarea').forEach(i=>i.value='');new bootstrap.Modal(document.getElementById('m')).show();}
function edit(r){document.getElementById('f-t').textContent='Edit Return';['id','name','amount','reason','type','status'].forEach(k=>{const el=document.getElementById('f-'+k);if(el)el.value=r[k]||'';});new bootstrap.Modal(document.getElementById('m')).show();}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>
