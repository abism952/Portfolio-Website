// script.js

// ================= MOBILE MENU =================

const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

// ================= TYPING EFFECT =================

const text = ["Frontend Developer", "Web Designer", "JavaScript Developer"];

let index = 0;
let charIndex = 0;

const typing = document.querySelector(".typing");

function type(){

  if(charIndex < text[index].length){

    typing.textContent += text[index].charAt(charIndex);

    charIndex++;

    setTimeout(type,100);

  }
  else{

    setTimeout(erase,1500);

  }

}

function erase(){

  if(charIndex > 0){

    typing.textContent = text[index].substring(0,charIndex-1);

    charIndex--;

    setTimeout(erase,50);

  }
  else{

    index++;

    if(index >= text.length){
      index = 0;
    }

    setTimeout(type,500);

  }

}

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(type,500);
});

function  clk(){
     window.open("cv.pdf.pdf", "_blank");
};

function changebg (){
  var abc = document.getElementById ("clr").value
  var bg = document.getElementById("color")
  document.body.style.background=abc;
}