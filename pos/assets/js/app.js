// App-wide JS
document.addEventListener('DOMContentLoaded', () => {
  // Theme toggle
  const dt = document.getElementById('darkToggle');
  const saved = localStorage.getItem('theme');
  if (saved === 'dark') document.documentElement.setAttribute('data-theme','dark');
  if (dt) dt.addEventListener('click', () => {
    const cur = document.documentElement.getAttribute('data-theme');
    if (cur === 'dark') { document.documentElement.removeAttribute('data-theme'); localStorage.setItem('theme','light'); }
    else { document.documentElement.setAttribute('data-theme','dark'); localStorage.setItem('theme','dark'); }
  });

  // DataTables auto
  if (window.jQuery && jQuery.fn.DataTable) {
    jQuery('table.datatable').each(function(){
      jQuery(this).DataTable({ pageLength: 10, lengthChange:false, order: [] });
    });
  }

  // Animated counters
  document.querySelectorAll('[data-counter]').forEach(el => {
    const target = parseFloat(el.dataset.counter);
    const dur = 900; const start = performance.now();
    const fmt = el.dataset.fmt || '';
    function tick(t){
      const p = Math.min(1,(t-start)/dur);
      const v = target * (0.5 - Math.cos(p*Math.PI)/2);
      el.textContent = fmt + (Number.isInteger(target) ? Math.round(v).toLocaleString() : v.toFixed(2));
      if (p<1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  });
});

// Toast
function toast(msg, type='success'){
  const el = document.createElement('div');
  el.className = 'toast-pop ' + type;
  el.textContent = msg;
  Object.assign(el.style,{position:'fixed',bottom:'24px',right:'24px',background:type==='error'?'#EF4444':'#10B981',color:'#fff',padding:'12px 18px',borderRadius:'10px',boxShadow:'0 10px 30px rgba(0,0,0,.15)',zIndex:9999,fontWeight:500});
  document.body.appendChild(el);
  setTimeout(()=>el.remove(),2500);
}
