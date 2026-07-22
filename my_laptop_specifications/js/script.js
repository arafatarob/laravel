(function(){
  "use strict";

  /* ---- thumbnail gallery ---- */
  const mainImg = document.getElementById('mainImg');
  document.querySelectorAll('.thumb').forEach(t => {
    t.addEventListener('click', () => {
      document.querySelectorAll('.thumb').forEach(x => x.classList.remove('active'));
      t.classList.add('active');
      if (mainImg) mainImg.src = t.dataset.full;
    });
  });

  /* ---- color swatch (Safe Check added) ---- */
  const colorLabel = document.getElementById('colorLabel');
  document.querySelectorAll('.swatch').forEach(sw => {
    sw.addEventListener('click', () => {
      document.querySelectorAll('.swatch').forEach(s => s.classList.remove('active'));
      sw.classList.add('active');
      if (mainImg) mainImg.src = sw.dataset.img;
      if (colorLabel) colorLabel.textContent = sw.dataset.color;
    });
  });

  /* ---- price logic ---- */
  const basePrice = 142900;
  let ramExtra = 0, storageExtra = 0, qty = 1;
  const priceNow = document.getElementById('priceNow');

  function fmt(n){ return '৳' + n.toLocaleString('en-IN'); }
  function updatePrice(){
    if (priceNow) priceNow.textContent = fmt(basePrice + ramExtra + storageExtra);
  }

  document.querySelectorAll('.opt-pills').forEach(group => {
    group.addEventListener('click', (e) => {
      const btn = e.target.closest('.opt-pill');
      if (!btn) return;
      group.querySelectorAll('.opt-pill').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const price = Number(btn.dataset.price);
      if (group.dataset.group === 'ram') ramExtra = price;
      if (group.dataset.group === 'storage') storageExtra = price;
      updatePrice();
    });
  });

  /* ---- quantity (Safe Check added) ---- */
  const qtyValue = document.getElementById('qtyValue');
  const qtyPlus = document.getElementById('qtyPlus');
  const qtyMinus = document.getElementById('qtyMinus');

  if (qtyPlus) {
    qtyPlus.addEventListener('click', () => {
      qty = Math.min(qty + 1, 9);
      if (qtyValue) qtyValue.textContent = qty;
    });
  }
  if (qtyMinus) {
    qtyMinus.addEventListener('click', () => {
      qty = Math.max(qty - 1, 1);
      if (qtyValue) qtyValue.textContent = qty;
    });
  }

  /* ---- toast & buttons (Safe Check added) ---- */
  const toast = document.getElementById('toast');
  const toastText = document.getElementById('toastText');
  function showToast(msg){
    if (!toast || !toastText) return;
    toastText.textContent = msg;
    toast.classList.add('show');
    clearTimeout(window.__t);
    window.__t = setTimeout(() => toast.classList.remove('show'), 2800);
  }

  const addToCartBtn = document.getElementById('addToCart');
  if (addToCartBtn) {
    addToCartBtn.addEventListener('click', () => {
      showToast(`Added ${qty} × Nova Slim 14 to cart — ${priceNow ? priceNow.textContent : ''}`);
    });
  }

  const buyNowBtn = document.getElementById('buyNow');
  if (buyNowBtn) {
    buyNowBtn.addEventListener('click', () => {
      showToast('Redirecting to checkout…');
    });
  }

  /* ---- tabs (এখন নির্দ্বিধায় কাজ করবে) ---- */
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));

      btn.classList.add('active');
      const targetPanel = document.getElementById('tab-' + btn.dataset.tab);
      if (targetPanel) {
        targetPanel.classList.add('active');
      }
    });
  });

})();
