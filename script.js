let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscrollk = () =>{
    menu.classList.renove('fa-times');
    navbar.classList.toggle('active');
};
 var swiper = new Swiper(".home-slider", {     loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
  });


  var swiper = new Swiper(".home-slider", {     loop:true,
     loop:true,
     spaceBetween: 20,
     autoheight:true,
     grabCursor:true,
     breakpoints: {
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
  });

  let loadMoreBtn = document.querySelector('.product .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.product .box-container .box')];
    for (var i = currentItem; i< currentItem + 3; i++){
      boxes[1].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
    }
  };

