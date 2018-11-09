var openLoginRight = document.querySelector('.h1');
var loginWrapper = document.querySelector('.login-wrapper');
var openLoginBack = document.querySelector('.h3');

openLoginBack.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});