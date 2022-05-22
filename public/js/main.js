const btnBurger = document.querySelector('.burger__btn');
const line__menu = document.querySelector('.line__menu');
const burgerMenu = document.querySelector('.burger__menu');

btnBurger.addEventListener('click', function(){
  line__menu.classList.toggle('active');
  burgerMenu.classList.toggle('burger__menu__active');

});
// Бургер меню


const login = document.getElementById('login'),
      register = document.getElementById('register'),
      blockLogin = document.querySelector('.block__login'),
      blockRegister = document.querySelector('.block__register'),
      popupBlock = document.querySelector('.auth__popup'),
      btnAuth = document.querySelector('.btn__auth'),
      close = document.querySelectorAll('.close');

btnAuth.addEventListener('click', function(){
  popupBlock.classList.add('active__popup');
  blockLogin.classList.add('active__form');
});

close[0].addEventListener('click', function(){
  popupBlock.classList.remove('active__popup');
  blockRegister.classList.remove('active__form');
  blockLogin.classList.remove('active__form');
});
close[1].addEventListener('click', function(){
  popupBlock.classList.remove('active__popup');
  blockRegister.classList.remove('active__form');
  blockLogin.classList.remove('active__form');
});


register.addEventListener('click', function(){
  blockLogin.classList.remove('active__form');
  blockRegister.classList.add('active__form');
});

login.addEventListener('click', function(){
  blockRegister.classList.remove('active__form');
  blockLogin.classList.add('active__form');
});

// Модальное меню

const slides = document.querySelectorAll('.slide');

let index = 0;

function activeSlide(n){
  for(slide of slides){
    slide.classList.remove('active__slide');
  };
  slides[n].classList.add('active__slide');
};

function nextSlide(){
  if(index == slides.length-1){
    index = 0;
    activeSlide(index);
  }else{
    index++;
    activeSlide(index);
  };
};

function prevSlide(){
  if(index == 0){
    index = slides.length-1;
    activeSlide(index);
  }else{
    index--;
    activeSlide(index);
  };
};


activeSlide(index);
setInterval(nextSlide, 3000)