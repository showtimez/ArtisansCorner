<x-layout>


    <x-header>
        <div class="container-fluid bgCarta">
        <h2 id="testo" class="text-center py-5 my-5 display-3 fw-bold">{{__('ui.navLavConNoi')}}</h2>
        </div>


    <script type="text/javascript">
        // testo da mostrare
        var testo = "Il nostro team";
        // output
        var output = "";
        // incrementatore
        var i = 0;
        // velocità di scrittura
        var speed = 120;
        // dichiaro la funzione
        function scrivi() {
            // creo l'output
            output += testo.charAt(i);
            // incremento
            i++;
            // scrittura
            document.getElementById("testo").innerHTML = output;
            // se è finito il testo
            if(i >= testo.length) {
                // fine
                clearInterval(s);
            }
        }
        // richiamo la funzione a intervalli
        s = setInterval("scrivi()",speed);
    </script>


    </x-header>

    <main>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{-- <h1 class="text-center display-1 titoloMain">Lo Staff</h1> --}}
            </div>
        </div>
        <div class="container my-2 citContainer">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9">

                    <h6 class="fst-italic text-center text-dark text-muted py-5 ">“Siamo un team di sviluppatori appassionati e dedicati, impegnati a creare soluzioni innovative e a superare i limiti della tecnologia. Ogni membro del nostro team porta un’esperienza unica e una prospettiva fresca, consentendoci di affrontare le sfide con creatività e determinazione.”</h6>

                </div>
            </div>
        </div>
    </main>
    {{-- Fine Main --}}
    {{-- Inizio Card --}}
        <div class="container my-5 ">
            <div class="row justify-content-center">
                <div class="swiper mySwiper ">
                    <div class="swiper-wrapper  ">
                        @foreach ($collaborators as $collaborator)
                            <div class="swiper-slide flex-column  rounded " >
                                <div class="col-12 col-md-3 py-5 text-center shadow rounded mx-2 my-2 ">
                                    <div class="d-flex justify-content-center  ">
                                        <img class="img prova"  src="https://picsum.photos/300" class="" alt="...">
                                    </div>
                                    <div class="card-body ">
                                        <h5 class="card-title p-3">{{ $collaborator->name }} {{ $collaborator->surname }}</h5>
                                        <p class="small fst-italic text-muted">Età : {{ $collaborator->age }}</p>

                                    </div>
                                    <p class="card-text">{{ $collaborator->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>





</x-layout>
