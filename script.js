const nav = document.querySelector("nav");

window.addEventListener ("scroll", function() {
  nav.classList.toggle ("sticky", window.scrollY > 130);
});


var swiper = new Swiper(".slider", {
  slidesPerView: 2,
  spaceBetween: 30,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});


let menu = document.querySelector('#menu-icon');
let menulist = document.querySelector('.menulist');

menu.onclick = () => {
  menu.classList.toggle('bx-x');
  menulist.classList.toggle('open');
};

window.onscroll = () => {
  menu.classList.remove('bx-x');
  menulist.classList.remove('open');
};