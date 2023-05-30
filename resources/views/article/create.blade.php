<x-layout>
    <x-header>
        <div class="bgCarta">
        <h2 id="testo" class="text-center display-3 fw-bold"></h2>
        </div>

            <script type="text/javascript">
                // testo da mostrare
                var testo = "{{ __('ui.createTitolo') }}";
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @livewire('create-form')
            </div>
        </div>
    </div>
</x-layout>
