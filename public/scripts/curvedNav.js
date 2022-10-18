// add active class to selected nav item
let items = document.querySelectorAll('.nav-item');

for (let i = 0; i < items.length; i++) {
  items[i].onclick = function (){
    let j = 0;
    while (j < items.length) {
      items[j++].className = 'nav-item';
    }
    items[i].className = 'nav-item active-nav'
  }
}

// add toggle menu
let menuToggle = document.querySelector('.toggle');
let navbar = document.querySelector('.navbar');
let mainContainer = document.querySelector('.main-container');

menuToggle.onclick = function(){
  menuToggle.classList.toggle('active');
  navbar.classList.toggle('active');
  mainContainer.classList.toggle('active-navbar')
}
