const e=document.querySelector("#sign-in-btn"),t=document.querySelector("#sign-up-btn"),n=document.querySelector(".container");t.addEventListener("click",()=>{n.classList.add("sign-up-mode")});e.addEventListener("click",()=>{n.classList.remove("sign-up-mode")});