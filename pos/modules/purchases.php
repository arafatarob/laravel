<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();

if ($_SERVER['REQUEST_METHOD']==='POST'){
  verify_csrf();
  $vendor=(int)$_POST['vendor_id']?:null;
  $items=json_decode($_POST['items']??'[]',true);
  $paid=(float)($_POST['paid']??0); $method=$_POST['payment_method']??'cash';
  if(!is_array($items)||!count($items)){ flash('error','Add items'); redirect('purchases.php'); }
  $tot=0; foreach($items as $i)$tot+=$i['qty']*$i['price'];
  $bill=generate_no('PUR','purchases','bill_no',$pdo);
  $due=max(0,$tot-$paid);
  $pdo->beginTransaction();
  try{
    $pdo->prepare("INSERT INTO purchases(bill_no,vendor_id,user_id,total,paid,due,payment_method,status) VALUES(?,?,?,?,?,?,?,'received')")
      ->execute([$bill,$vendor,$_SESSION['user_id'],$tot,$paid,$due,$method]);
    $pid=$pdo->lastInsertId();
    $sI=$pdo->prepare("INSERT INTO purchase_items(purchase_id,product_id,qty,price,total) VALUES(?,?,?,?,?)");
    $sU=$pdo->prepare("UPDATE products SET stock=stock+?, purchase_price=? WHERE id=?");
    foreach($items as $i){ $sI->execute([$pid,$i['id'],$i['qty'],$i['price'],$i['qty']*$i['price']]); $sU->execute([$i['qty'],$i['price'],$i['id']]); }
    $pdo->commit(); flash('success',"Purchase recorded: $bill");
  }catch(Exception $e){ $pdo->rollBack(); flash('error',$e->getMessage()); }
  redirect('purchases.php');
}
if(($_GET['action']??'')==='delete'){ $id=(int)$_GET['id']; $pdo->prepare("DELETE FROM purchases WHERE id=?")->execute([$id]); redirect('purchases.php'); }

$vendors=$pdo->query("SELECT id,name FROM vendors ORDER BY name")->fetchAll();
$products=$pdo->query("SELECT p.id, p.name, p.sku, p.purchase_price, u.short_name as unit FROM products p LEFT JOIN units u ON p.unit_id = u.id ORDER BY p.name")->fetchAll();
$rows=$pdo->query("SELECT p.*, v.name vname, (SELECT COUNT(*) FROM purchase_items WHERE purchase_id=p.id) items FROM purchases p LEFT JOIN vendors v ON v.id=p.vendor_id ORDER BY p.id DESC")->fetchAll();

$page_title='Purchases'; $page_sub='Manage your purchases and bills.';
include __DIR__.'/../includes/header.php'; ?>

<div class="table-wrap">
<div class="toolbar"><div class="search-input flex-grow-1"><i class="bi bi-search"></i><input class="form-control" placeholder="Search purchases..." onkeyup="ft(this)"></div>
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m"><i class="bi bi-plus-lg"></i> New Purchase</button></div>
<table class="table" id="tbl"><thead><tr><th>Bill No</th><th>Vendor</th><th>Date</th><th>Items</th><th>Total</th><th>Method</th><th>Status</th><th class="text-end">Action</th></tr></thead><tbody>
<?php foreach($rows as $r): ?>
<tr><td class="fw-semibold"><?= e($r['bill_no']) ?></td><td><?= e($r['vname']) ?></td><td><?= date('d M, Y',strtotime($r['created_at'])) ?></td><td><?= $r['items'] ?></td>
<td>৳ <?= number_format($r['total'],2) ?></td><td><?= e(ucfirst($r['payment_method'])) ?></td><td><span class="badge-pill badge-received"><?= e(ucfirst($r['status'])) ?></span></td>
<td class="text-end"><a class="btn-icon danger" href="?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Delete?')"><i class="bi bi-trash"></i></a></td></tr>
<?php endforeach; ?>
</tbody></table></div>

<div class="modal fade" id="m"><div class="modal-dialog modal-lg"><div class="modal-content" style="border-radius:16px;border:0">
<form method="post"><?= csrf_field() ?><input type="hidden" name="items" id="itemsInput">
<div class="modal-header" style="border:0"><h5>New Purchase</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
<div class="modal-body">
<div class="row g-3 mb-3">
<div class="col-md-8"><label class="form-label">Vendor</label><select class="form-select" name="vendor_id" required><option value="">Select vendor</option><?php foreach($vendors as $v): ?><option value="<?= $v['id'] ?>"><?= e($v['name']) ?></option><?php endforeach; ?></select></div>
<div class="col-md-4"><label class="form-label">Payment</label><select class="form-select" name="payment_method"><option value="cash">Cash</option><option value="bkash">bKash</option><option value="nagad">Nagad</option><option value="card">Card</option><option value="bank">Bank</option></select></div>
</div>
<div class="row g-2 align-items-end mb-2">
<div class="col-md-6"><label class="form-label">Product</label><select class="form-select" id="pp"><?php foreach($products as $p): ?><option value="<?= $p['id'] ?>" data-name="<?= e($p['name']) ?>" data-price="<?= $p['purchase_price'] ?>" data-unit="<?= e($p['unit'] ?? 'Pcs') ?>"><?= e($p['name']) ?> (<?= e($p['sku']) ?>)</option><?php endforeach; ?></select></div>
<div class="col-md-2"><label class="form-label">Qty</label><input type="number" id="pq" class="form-control" value="1"></div>
<div class="col-md-2"><label class="form-label">Price</label><input type="number" step="0.01" id="ppr" class="form-control"></div>
<div class="col-md-2"><button type="button" class="btn btn-primary w-100" onclick="addItem()">Add</button></div>
</div>
<table class="table"><thead><tr><th>Product</th><th>Qty</th><th>Unit</th><th>Price</th><th>Total</th><th></th></tr></thead><tbody id="cartBody"></tbody></table>
<div class="d-flex justify-content-between"><strong>Total</strong><strong id="ctotal" style="color:var(--primary)">৳ 0.00</strong></div>
<div class="mt-3"><label class="form-label">Paid</label><input type="number" step="0.01" name="paid" class="form-control" value="0"></div>
</div>
<div class="modal-footer" style="border:0"><button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary">Save Purchase</button></div>
</form>
</div></div></div>
<script>
const items=[];
document.getElementById('pp').addEventListener('change',e=>{document.getElementById('ppr').value=e.target.selectedOptions[0].dataset.price;});
document.getElementById('pp').dispatchEvent(new Event('change'));
function addItem(){const s=document.getElementById('pp').selectedOptions[0]; items.push({id:+s.value,name:s.dataset.name,unit:s.dataset.unit,qty:+document.getElementById('pq').value,price:+document.getElementById('ppr').value}); render();}
function render(){let t=0; document.getElementById('cartBody').innerHTML=items.map((i,idx)=>{const tt=i.qty*i.price; t+=tt; return `<tr><td>${i.name}</td><td>${i.qty}</td><td><small class="text-muted">${i.unit}</small></td><td>৳ ${i.price.toFixed(2)}</td><td>৳ ${tt.toFixed(2)}</td><td><button type="button" class="btn-icon danger" onclick="items.splice(${idx},1);render()"><i class="bi bi-trash"></i></button></td></tr>`;}).join(''); document.getElementById('ctotal').textContent='৳ '+t.toFixed(2); document.getElementById('itemsInput').value=JSON.stringify(items);}
function ft(i){const q=i.value.toLowerCase();document.querySelectorAll('#tbl tbody tr').forEach(r=>r.style.display=r.textContent.toLowerCase().includes(q)?'':'none');}
</script>
<?php include __DIR__.'/../includes/footer.php'; ?>
