const steps = document.querySelectorAll('.steps');
const form_step = document.querySelectorAll('.form_step');
const stepPrev = document.querySelector('.previousBtn');
const stepNext = document.querySelector('.nextBtn');
const fname = document.querySelector(".fName");
const lname = document.querySelector(".lName");
const number = document.querySelector(".number");
const email = document.querySelector(".email");




let index = 1;

stepNext.addEventListener("click", function(){

    index++;
  if(index > steps.length){
    index = steps.length;
  }
  update();
});

stepPrev.addEventListener("click", function(){
  index--;
  if(index < 1){
    index = 1;
  }
  update();
});

function update() {
  steps.forEach((item, i) => {
    if(i === (index - 1)){
      item.classList.add('active');
    }else{
      item.classList.remove('active');
    }
  });

  if(index === 1){
    stepPrev.classList.add('visibility_hidden');
  }else if(index === steps.length){
    stepNext.innerText = "submit";
    stepNext.type = "submit";
    stepPrev.classList.remove('visibility_hidden');
  }else{
    stepPrev.classList.remove('visibility_hidden');
  }

  form_step.forEach((form, j) => {
    if(j === (index - 1)){
      form.classList.remove('d_none');
    }else{
      form.classList.add('d_none');
    }
  });


}

update();
