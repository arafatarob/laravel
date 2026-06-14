document.addEventListener('DOMContentLoaded', function(){
  // sidebar page location js
    const sidebarMenu = document.querySelectorAll('.sidebar_menu ul li a');
    const locationName = window.location.pathname;

    sidebarMenu.forEach(menu => {
      if(menu.href.includes(`${locationName}`)){
        menu.parentElement.classList.add('active');
      }else{
        menu.parentElement.classList.remove('active');
      }
    });



  // toggle theme js
  const toggleInput = document.getElementById('toggleCheck');
  const body = document.body;

    toggleInput.addEventListener("change", function(){
      if (this.checked) {
        body.classList.remove('darkMode');
      }else{
        body.classList.add('darkMode');
      }
      if(body.classList.contains('darkMode')){
        localStorage.setItem('theme', 'dark');
      }else{
        localStorage.setItem('theme', 'light');
      }
    });

    if (localStorage.getItem('theme') === 'dark') {
      body.classList.add('darkMode');
      toggleInput.checked = true;
    }

    const savedTheme = localStorage.getItem('theme');

    if(savedTheme === 'dark'){
      body.classList.add('darkMode');
      toggleInput.checked = false;
    }else{
      body.classList.remove('darkMode');
      toggleInput.checked = true;
    }


    // form open js
    const addBox = document.querySelector('.addBox');
    const formContainer = document.querySelector('.form-container');
    const close = document.querySelector('.cross_icon i');

    addBox.addEventListener('click', function(){
      formContainer.classList.add('openForm');
    });

    close.addEventListener('click', function(){
      formContainer.classList.remove('openForm');
    });




});



document.addEventListener('DOMContentLoaded', function(){
  // loading popup
  const body = document.body;
  const div = document.createElement('div');
  div.classList.add('loadingDiv');

  const container = document.createElement('div');
  container.classList.add('container');
  container.innerHTML = '<h2>Loading.......</h2>';

  body.appendChild(div);
  div.appendChild(container);

  const loadingDiv = document.querySelector('.loadingDiv');

    window.addEventListener('load', function(){
      setTimeout(function () {
        loadingDiv.style.display = 'none';
      }, 2500);
    });
});
