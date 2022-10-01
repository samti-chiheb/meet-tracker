const navBtn = document.getElementById("navbar_btn");
const navbar = document.querySelector(".side-navbar");
const searchBtn = document.querySelector(".uil-search");

let toggleBtn = [navBtn, searchBtn];

toggleBtn.forEach( function(btn) {
  btn.addEventListener("click", function(){
    navbar.classList.toggle("active");  
  });
})

searchBtn.addEventListener("click", function(e){
  document.querySelector(".text-field").focus(e);
  
})