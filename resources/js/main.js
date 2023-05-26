
console.log('funziono');

let contaClienti = document.getElementById('clienti');
let contaArticoli = document.getElementById('articoli');
let contaRecensioni = document.getElementById('recensioni');


function createInterval(finalNumber, element) {

    let count = 0;

    let interval2 = setInterval( ()=>{

        if(count < finalNumber){

            count++
            element.innerHTML = count;


        } else {

            clearInterval(interval2);

        }

    },10);

}





// do l'inizio della chiamata

let inizio = document.querySelector('#inizio');

// variabile d'appoggio per cessare l'incremento dei numeri
let intersectionCheck = true;

// funzione intersection observe

let observed = new IntersectionObserver(

    (entries)=>{

        entries.forEach( (entry)=>{

            if(entry.isIntersecting && intersectionCheck == true){

                createInterval(1250, contaClienti);
                createInterval(1110, contaArticoli);
                createInterval(652, contaRecensioni);

                intersectionCheck = false;

            }

        } )

    }

)

observed.observe(inizio);
