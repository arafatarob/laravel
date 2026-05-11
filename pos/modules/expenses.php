<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $id=(int)($_POST['id']??0);
  $d=[trim($_POST['name']),trim($_POST['category']??''),(float)$_POST['amount'],$_POST['payment_method']??'cash',$_POST['expense_date'] ?: date('Y-m-d'),trim($_POST['note']??'')];
  if($id) $pdo->prepare("UPDATE expenses SET name=?,category=?,amount=?,payment_method=?,expense_date=?,note=? WHERE id=?")->execute([...$d,$id]);
  else $pdo->prepare("INSERT INTO expenses(name,category,amount,payment_method,expense_date,note) VALUES(?,?,?,?,?,?)")->execute($d);
  flash('success','Saved'); redirect('expenses.php');
}
if(($_GET['action']??'')==='delete'){ $pdo->prepare("DELETE FROM expenses WHERE id=?")->execute([(int)$_GET['id']]); redirect('expenses.php'); }
$rows=$pdo->query("SELECT * FROM expenses ORDER BY expense_date DESC, id DESC")->fetchAll();
$page_title='Expenses'; $page_sub='Manage your expenses.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search expenses..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" onclick="add()"><i class="bi bi-plus-lg"></i> Add Expense</button></div>
<table class="table" id="tbl"><thead><tr><th>Name</th><th>Category</th><th>Date</th><th>Amount</th><th>Method</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): ?>
<tr><td class="fw-semibold"><?= e($r['name']) ?></td><td><?= e($r['category']) ?></td><td><?= date('d M, Y',strtotime($r['expense_date'])) ?></td><td>৳ <?= number_format($r['amount'],2) ?></td><td><?= e(ucfirst($r['payment_method'])) ?></td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">Add Expense</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-6"><label class="form-label">Name</label><input class="form-control" name="name" id="f-name" required></div>
<div class="col-6"><label class="form-label">Category</label><input class="form-control" name="category" id="f-category"></div>
<div class="col-6"><label class="form-label">Amount</label><input type="number" step="0.01" class="form-control" name="amount" id="f-amount" required></div>
<div class="col-6"><label class="form-label">Date</label><input type="date" class="form-control" name="expense_date" id="f-expense_date"></div>
<div class="col-12"><label class="form-label">Payment Method</label><select class="form-select" name="payment_method" id="f-payment_method"><option value="cash">Cash</option><option value="bkash">bKash</option><option value="nagad">Nagad</option><option value="card">Card</option><option value="bank">Bank</option></select></div>
<div class="col-12"><label class="form-label">Note</label><textarea class="form-control" name="note" id="f-note"></textarea></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function add(){document.getElementById('f-t').textContent='Add Expense';document.querySelectorAll('#m input,#m textarea').forEach(i=>i.value='');document.getElementById('f-expense_date').value=new Date().toISOString().slice(0,10);new bootstrap.Modal(document.getElementById('m')).show();}
function edit(r){document.getElementById('f-t').textContent='Edit Expense';['id','name','category','amount','expense_date','payment_method','note'].forEach(k=>{const el=document.getElementById('f-'+k);if(el)el.value=r[k]||'';});new bootstrap.Modal(document.getElementById('m')).show();}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>
