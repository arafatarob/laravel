// dashboard js
document.addEventListener('DOMContentLoaded', function(){
  const menu = document.querySelectorAll('.sidebar ul li a');
  const currentUrl = window.location.pathname;

  menu.forEach(item => {
    if (currentUrl.includes(item.getAttribute('href'))) {
      item.parentElement.classList.add('active');
    } else {
      item.parentElement.classList.remove('active');
    }
  });
});



// product js

const productViewBtn = document.querySelector('.productViewBtn');
const productViewBtnA = document.querySelector('.productViewBtn a');
const view = document.querySelector('.user_view');
productViewBtnA.addEventListener('click', function(e){
  e.preventDefault();
});
productViewBtn.addEventListener('click', function(){
  view.classList.toggle('top1000');
});
