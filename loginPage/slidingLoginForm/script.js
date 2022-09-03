// input field focus effect 

const textInputs = document.querySelectorAll("input");


textInputs.forEach(textInput =>{
  textInput.addEventListener("focus", ()=>{
    let parent = textInput.parentNode;
    parent.classList.add("activeField");
  })
  textInput.addEventListener("blur", ()=>{
    let parent = textInput.parentNode;
    parent.classList.remove("activeField");
  })
})

// show hide password btn 
const hidePasswordBtn = document.querySelector(".eye-btn");
const passwordInput = document.querySelector(".password-input");

hidePasswordBtn.addEventListener("click", ()=>{
  if(passwordInput.type === "password"){
    passwordInput.type = "text";
    hidePasswordBtn.innerHTML="<i class='uil uil-eye'></i>";
  }else{
    passwordInput.type = "password";
    hidePasswordBtn.innerHTML = `<i class="uil uil-eye-slash"></i>`;
  }
})


// sliding between sign up and sgin in form

const signUpBtn = document.querySelector(".sign-up-btn");
const signInBtn = document.querySelector(".sign-in-btn");
const signUpForm = document.querySelector(".sign-up-form");
const signInForm = document.querySelector(".sign-in-form");

signUpBtn.addEventListener("click", ()=>{
  signInForm.classList.add("hideForm");
  signUpForm.classList.add("showForm");
  signInForm.classList.remove("showForm");
})

signInBtn.addEventListener("click", ()=>{
  signInForm.classList.remove("hideForm");
  signUpForm.classList.remove("showForm");
  signInForm.classList.add("showForm");


})
