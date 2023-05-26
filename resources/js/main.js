
console.log('funziono');


// bottoni form

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");



sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

// fine bottoni form

// counter homepage

// chiamata 

// function createInterval(finalNumber, element){

//   const counter = 0;

//   const interval = setInterval( ()=>{


//       if(counter < finalNumber){

//           counter++
//           element.innerHTML = counter;
          

//       } else {

//           clearInterval(interval);

//       }

//   }, 1)

// }

// const firstSpan = document.querySelector('#first-span');
// const secondSpan = document.querySelector('#second-span');
// const thirdSpan = document.querySelector('#third-span');

// createInterval(1250, firstSpan);
// createInterval(1110, secondSpan);
// createInterval(652, thirdSpan);


// do l'inizio della chiamata

// let inizio = document.querySelector('#inizio');

// variabile d'appoggio per cessare l'incremento dei numeri
// let intersectionCheck = true;

// funzione intersection observe

// let observed = new IntersectionObserver(

//   (entries)=>{

//       entries.forEach( (entry)=>{

//           if(entry.isIntersecting && intersectionCheck == true){

//               createInterval(1250, firstSpan);
//               createInterval(1110, secondSpan);
//               createInterval(652, thirdSpan);

//               intersectionCheck = false;

//           }

//       } )

//   }

// )  

// observed.observe(inizio);


// fine counter


