const slides = document.querySelectorAll('.slide');

let index = 0;

function activeslide(n){
  
  for(slide of slides){
    slide.classList.remove('active');
  };
  slides[n].classList.add('active');
};

function nextSlide(){
  if (index == slides.length-1){
    index = 0;
    activeslide(index);
}else{
    index++;
    activeslide(index);
  };
};

function prevSlide(){
  if (index == 0){
    index = slides.length-1;
    activeslide(index);
}else{
    index--;
    activeslide(index);
  };
};

activeslide(index);
setInterval(nextSlide, 2000)