<x-layout>
    <x-header>
        <div class="container-fluid bgCarta">

        <h2 class="py-5 my-5 display-3 fw-bold" id="testo">Ecco tutti gli annunci di   </h2> <h2 id="categoria-nome" class="text-center py-5 my-5 testo display-3">  {{ $category->name }} </h2>
        </div>
            {{-- <span id="testo"></span> --}}

        <script type="text/javascript">
            // testo da mostrare
            var testo = "Ecco tutti gli annunci di :";
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
    <div class="container vh-100">
        <div class="row justify-content-center py-5 my-5">
            <div class="col-12 col-md-4">

                @forelse ($articles as $article)
                    <div class="card my-3">

                        {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                        <div class="card-body ">
                            <h5 class="card-title text-center">{{ $article->title }}</h5>
                            <p class="card-text text-center">{{ $article->description }}</p>
                            <p>Stato: {{ $article->state }}</p>

                            <div class=" container-fluid d-flex gap-5">
                                <h4>Prezzo: {{ $article->price }}</h4>
                                <p class="mx-0">Categoria {{ $article->category->name }}</p>
                            </div>
                            {{-- <a href="{{route('article.show')}}" class="btn btn-primary">Dettagli</a> --}}
                        </div>
                    </div>
                @empty
                    <div class="d-flex justify-content-center ">
                        <h3>Non sono ancora stati inseriti annunci.</h3>
                    </div>
                @endforelse

            </div>
        </div>
    </div>






</x-layout>
