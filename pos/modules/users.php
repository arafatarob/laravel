<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();
if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf();
  $id=(int)($_POST['id']??0);
  $name=trim($_POST['name']); $email=trim($_POST['email']); $phone=trim($_POST['phone']??'');
  $role=$_POST['role']??'staff'; $status=$_POST['status']??'active';
  $pass=$_POST['password']??'';
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){flash('error','Invalid email');redirect('users.php');}
  if($id){
    if($pass){ $pdo->prepare("UPDATE users SET name=?,email=?,phone=?,role=?,status=?,password=? WHERE id=?")->execute([$name,$email,$phone,$role,$status,password_hash($pass,PASSWORD_DEFAULT),$id]); }
    else { $pdo->prepare("UPDATE users SET name=?,email=?,phone=?,role=?,status=? WHERE id=?")->execute([$name,$email,$phone,$role,$status,$id]); }
  } else {
    if(!$pass){flash('error','Password required');redirect('users.php');}
    $pdo->prepare("INSERT INTO users(name,email,phone,role,status,password) VALUES(?,?,?,?,?,?)")->execute([$name,$email,$phone,$role,$status,password_hash($pass,PASSWORD_DEFAULT)]);
  }
  flash('success','Saved'); redirect('users.php');
}
if(($_GET['action']??'')==='delete'){ $id=(int)$_GET['id']; if($id!=$_SESSION['user_id']) $pdo->prepare("DELETE FROM users WHERE id=?")->execute([$id]); redirect('users.php'); }
$rows=$pdo->query("SELECT * FROM users ORDER BY id DESC")->fetchAll();
$page_title='Users'; $page_sub='Manage system users.';
include __DIR__.'/../includes/header.php'; ?>
<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search users..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" onclick="add()"><i class="bi bi-plus-lg"></i> Add New User</button></div>
<table class="table" id="tbl"><thead><tr><th>Name</th><th>Email</th><th>Role</th><th>Status</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): $b=$r['status']==='active'?'badge-active':'badge-inactive'; ?>
<tr><td class="fw-semibold"><?= e($r['name']) ?></td><td><?= e($r['email']) ?></td><td><?= e(ucfirst($r['role'])) ?></td>
<td><span class="badge-pill <?= $b ?>"><?= e(ucfirst($r['status'])) ?></span></td>
<td class="text-end"><a class="btn-icon" href="#" onclick='edit(<?= json_encode($r) ?>);return false'><i class="bi bi-pencil"></i></a><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<div class="modal fade" id="m"><div class="modal-dialog"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="id" id="f-id">
<div class="modal-header" style="border:0"><h5 id="f-t">Add User</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body"><div class="row g-3">
<div class="col-6"><label class="form-label">Name</label><input class="form-control" name="name" id="f-name" required></div>
<div class="col-6"><label class="form-label">Email</label><input type="email" class="form-control" name="email" id="f-email" required></div>
<div class="col-6"><label class="form-label">Phone</label><input class="form-control" name="phone" id="f-phone"></div>
<div class="col-6"><label class="form-label">Role</label><select class="form-select" name="role" id="f-role"><option value="admin">Admin</option><option value="manager">Manager</option><option value="staff">Staff</option></select></div>
<div class="col-6"><label class="form-label">Status</label><select class="form-select" name="status" id="f-status"><option value="active">Active</option><option value="inactive">Inactive</option></select></div>
<div class="col-6"><label class="form-label">Password <span class="text-muted small">(leave blank to keep)</span></label><input type="password" class="form-control" name="password" id="f-password"></div>
</div></div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save</button></div>
</form></div></div></div>
<script>
function add(){document.getElementById('f-t').textContent='Add User';document.querySelectorAll('#m input').forEach(i=>i.value='');new bootstrap.Modal(document.getElementById('m')).show();}
function edit(r){document.getElementById('f-t').textContent='Edit User';['id','name','email','phone','role','status'].forEach(k=>{const el=document.getElementById('f-'+k);if(el)el.value=r[k]||'';});document.getElementById('f-password').value='';new bootstrap.Modal(document.getElementById('m')).show();}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>
