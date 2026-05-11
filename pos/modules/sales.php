<?php
require_once __DIR__ . '/../includes/functions.php';
require_login();

// AJAX endpoints
if (isset($_GET['ajax'])) {
    header('Content-Type: application/json');
    if ($_GET['ajax'] === 'search') {
        $q = '%'.($_GET['q'] ?? '').'%';
        $st = $pdo->prepare("SELECT p.id,p.name,p.sku,p.barcode,p.price,p.stock,u.short_name as unit FROM products p LEFT JOIN units u ON p.unit_id = u.id WHERE (p.name LIKE ? OR p.sku LIKE ? OR p.barcode LIKE ?) AND p.status='active' LIMIT 30");
        $st->execute([$q,$q,$q]);
        echo json_encode($st->fetchAll());
        exit;
    }
    if ($_GET['ajax'] === 'all') {
        echo json_encode($pdo->query("SELECT p.id,p.name,p.sku,p.price,p.stock,u.short_name as unit FROM products p LEFT JOIN units u ON p.unit_id = u.id WHERE p.status='active' ORDER BY p.name LIMIT 60")->fetchAll());
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    $items = json_decode($_POST['items'] ?? '[]', true);
    if (!is_array($items) || count($items) === 0) { flash('error','Add at least one item'); redirect('sales.php'); }
    $customer_id = (int)($_POST['customer_id'] ?? 0) ?: null;
    $discount = (float)($_POST['discount'] ?? 0);
    $tax = (float)($_POST['tax'] ?? 0);
    $shipping = (float)($_POST['shipping'] ?? 0);
    $paid = (float)($_POST['paid'] ?? 0);
    $method = $_POST['payment_method'] ?? 'cash';
    $subtotal = 0;
    foreach ($items as $it) $subtotal += $it['qty'] * $it['price'];
    $total = $subtotal - $discount + $tax + $shipping;
    $due = max(0, $total - $paid);
    $invoice = generate_no('INV','sales','invoice_no',$pdo);
    $pdo->beginTransaction();
    try {
        $pdo->prepare("INSERT INTO sales(invoice_no,customer_id,user_id,subtotal,discount,tax,shipping,total,paid,due,payment_method,status) VALUES(?,?,?,?,?,?,?,?,?,?,?, 'completed')")
            ->execute([$invoice,$customer_id,$_SESSION['user_id'],$subtotal,$discount,$tax,$shipping,$total,$paid,$due,$method]);
        $sid = $pdo->lastInsertId();
        $stI = $pdo->prepare("INSERT INTO sale_items(sale_id,product_id,qty,price,total) VALUES(?,?,?,?,?)");
        $stU = $pdo->prepare("UPDATE products SET stock=stock-? WHERE id=?");
        foreach ($items as $it) {
            $stI->execute([$sid,$it['id'],$it['qty'],$it['price'],$it['qty']*$it['price']]);
            $stU->execute([$it['qty'],$it['id']]);
        }
        $pdo->commit();
        flash('success',"Sale completed: $invoice");
        redirect('invoice.php?id='.$sid);
    } catch (Exception $e) {
        $pdo->rollBack();
        flash('error','Failed: '.$e->getMessage());
        redirect('sales.php');
    }
}

$customers = $pdo->query("SELECT id,name FROM customers ORDER BY name")->fetchAll();
$products = $pdo->query("SELECT p.id,p.name,p.sku,p.price,p.stock,u.short_name as unit FROM products p LEFT JOIN units u ON p.unit_id = u.id WHERE p.status='active' ORDER BY p.name LIMIT 60")->fetchAll();

$page_title = 'New Sale (POS)';
$page_sub = 'Create a new sales invoice.';
include __DIR__ . '/../includes/header.php';
?>
<div class="pos-grid">
  <div>
    <div class="card-soft mb-3">
      <div class="search-input"><i class="bi bi-upc-scan"></i><input id="posSearch" class="form-control" placeholder="Scan barcode or search product..."></div>
    </div>
    <div class="card-soft">
      <div class="section-title"><h3>Products</h3></div>
      <div class="pos-products" id="posProducts">
        <?php foreach ($products as $p): ?>
          <div class="pos-product" data-id="<?= $p['id'] ?>" data-name="<?= e($p['name']) ?>" data-price="<?= $p['price'] ?>" data-unit="<?= e($p['unit'] ?? 'Pcs') ?>">
            <div style="font-size:24px;color:var(--primary)"><i class="bi bi-box-seam"></i></div>
            <div class="pname"><?= e($p['name']) ?></div>
            <div class="psku"><?= e($p['sku']) ?></div>
            <div class="pprice">৳ <?= number_format($p['price'],2) ?> / <small><?= e($p['unit'] ?? 'Pcs') ?></small></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div>
    <form method="post" id="saleForm">
      <?= csrf_field() ?>
      <input type="hidden" name="items" id="itemsInput">
      <div class="card-soft">
        <div class="mb-3">
          <label class="form-label">Customer</label>
          <select class="form-select" name="customer_id">
            <?php foreach ($customers as $c): ?><option value="<?= $c['id'] ?>"><?= e($c['name']) ?></option><?php endforeach; ?>
          </select>
        </div>
        <h6 class="mb-2">Cart</h6>
        <div id="cart" style="min-height:120px"><div class="text-muted small text-center py-4">Cart is empty</div></div>
        <hr>
        <div class="row g-2 mb-2">
          <div class="col-6"><label class="form-label">Discount</label><input type="number" step="0.01" name="discount" class="form-control" id="discount" value="0"></div>
          <div class="col-6"><label class="form-label">Tax</label><input type="number" step="0.01" name="tax" class="form-control" id="tax" value="0"></div>
          <div class="col-6"><label class="form-label">Shipping</label><input type="number" step="0.01" name="shipping" class="form-control" id="shipping" value="0"></div>
          <div class="col-6"><label class="form-label">Paid</label><input type="number" step="0.01" name="paid" class="form-control" id="paid" value="0"></div>
        </div>
        <div class="mb-2">
          <label class="form-label">Payment Method</label>
          <select class="form-select" name="payment_method">
            <option value="cash">Cash</option><option value="bkash">bKash</option><option value="nagad">Nagad</option><option value="card">Card</option><option value="bank">Bank Transfer</option>
          </select>
        </div>
        <div class="d-flex justify-content-between py-2"><span>Subtotal</span><strong id="sumSubtotal">৳ 0.00</strong></div>
        <div class="d-flex justify-content-between py-2 border-top"><span>Total</span><strong id="sumTotal" style="color:var(--primary);font-size:18px">৳ 0.00</strong></div>
        <div class="d-flex justify-content-between py-2"><span>Due</span><strong id="sumDue" style="color:var(--danger)">৳ 0.00</strong></div>
        <button type="submit" class="btn btn-primary w-100 mt-2"><i class="bi bi-check2-circle"></i> Complete Sale</button>
      </div>
    </form>
  </div>
</div>

<script>
const cart = {};
function render(){
  const wrap = document.getElementById('cart');
  const ids = Object.keys(cart);
  if (ids.length===0){ wrap.innerHTML='<div class="text-muted small text-center py-4">Cart is empty</div>'; calc(); return; }
  wrap.innerHTML = ids.map(id=>{
    const it = cart[id];
    return `<div class="cart-item">
      <div><div style="font-weight:600;font-size:13px">${it.name}</div><div class="text-muted small">৳ ${it.price.toFixed(2)} / ${it.unit}</div></div>
      <div class="qty-ctrl">
        <button type="button" onclick="chg(${id},-1)">-</button>
        <span>${it.qty} <small class="text-muted">${it.unit}</small></span>
        <button type="button" onclick="chg(${id},1)">+</button>
        <button type="button" onclick="rm(${id})" style="margin-left:6px;color:#EF4444">×</button>
      </div>
    </div>`;
  }).join('');
  calc();
}
function add(id,name,price,unit='Pcs'){ if(!cart[id]) cart[id]={id,name,price,unit,qty:0}; cart[id].qty++; render(); }
function chg(id,d){ cart[id].qty+=d; if(cart[id].qty<=0) delete cart[id]; render(); }
function rm(id){ delete cart[id]; render(); }
function calc(){
  let sub=0; Object.values(cart).forEach(i=>sub+=i.qty*i.price);
  const d=parseFloat(document.getElementById('discount').value)||0;
  const t=parseFloat(document.getElementById('tax').value)||0;
  const s=parseFloat(document.getElementById('shipping').value)||0;
  const p=parseFloat(document.getElementById('paid').value)||0;
  const tot=sub-d+t+s; const due=Math.max(0,tot-p);
  document.getElementById('sumSubtotal').textContent='৳ '+sub.toFixed(2);
  document.getElementById('sumTotal').textContent='৳ '+tot.toFixed(2);
  document.getElementById('sumDue').textContent='৳ '+due.toFixed(2);
  document.getElementById('itemsInput').value=JSON.stringify(Object.values(cart));
}
['discount','tax','shipping','paid'].forEach(id=>document.getElementById(id).addEventListener('input',calc));
document.querySelectorAll('.pos-product').forEach(el=>{
  el.addEventListener('click',()=>add(+el.dataset.id, el.dataset.name, +el.dataset.price, el.dataset.unit));
});
document.getElementById('posSearch').addEventListener('input', async e=>{
  const q=e.target.value;
  const r = await fetch('sales.php?ajax=search&q='+encodeURIComponent(q));
  const items = await r.json();
  document.getElementById('posProducts').innerHTML = items.map(p=>`
    <div class="pos-product" onclick="add(${p.id},'${p.name.replace(/'/g,"\\'")}',${p.price})" data-unit="${p.unit || 'Pcs'}">
      <div style="font-size:24px;color:var(--primary)"><i class="bi bi-box-seam"></i></div>
      <div class="pname">${p.name}</div><div class="psku">${p.sku}</div>
      <div class="pprice">৳ ${(+p.price).toFixed(2)} / <small>${p.unit || 'Pcs'}</small></div>
    </div>`).join('');
});
document.getElementById('saleForm').addEventListener('submit',e=>{
  if (Object.keys(cart).length===0){ e.preventDefault(); toast('Cart is empty','error'); }
});
</script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
