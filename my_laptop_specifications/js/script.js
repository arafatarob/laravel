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
