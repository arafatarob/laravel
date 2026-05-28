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
