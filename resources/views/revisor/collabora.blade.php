<x-layout>


    <x-header>
        <h2 id="testo" class="text-center py-5 my-5 display-3">Lavora con noi</h2>

        {{-- <span id="testo"></span> --}}

    <script type="text/javascript">
        // testo da mostrare    
        var testo = "Lavora con noi";
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

    <div class="container-fluid vh-200">
        <div class="row justify-content-center align-items-center mx-5 my-5">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                <h2>Diventa Revisore</h2>
                <p>Vuoi collaborare con il team The Artisan's Corner?</p>
                <p>Se sei appassionato di arte inviaci la tua candidatura.</p>
                <p>Cosa aspetti, clicca in basso per entrare nel nostro team.</p>
                @if(Auth::user())
                <a class="linkcustom px-3" href="{{ route('become.revisor') }}">Lavora con noi</a>
                @endif
            </div>

            <div class="col-12 col-md-6">
                <img width="600" height="350" src="/media/imgwork.jpg" alt="">
                
            </div>

        </div>

        <div class="row justify-content-center align-items-center mx-5 my-5">

            <div class="col-12 col-md-6">
                <img width="600" height="350" src="/media/work2.jpg" alt="">
                
            </div>

            <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                <h2>Altre posizioni</h2>
                <p>Vuoi collaborare con il team The Artisan's Corner?</p>
                <p>Se sei appassionato di arte inviaci la tua candidatura.</p>
                <p>Cosa aspetti, clicca in basso per entrare nel nostro team.</p>
                @if(Auth::user())
                <a class="linkcustom px-3" href="{{ route('become.revisor') }}">Lavora con noi</a>
                @endif
            </div>

           

        </div>
    </div>

  
    




</x-layout>