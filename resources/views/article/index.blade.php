<x-layout>
    <x-header>
        <div class="bgCarta">
        <h2 id="testo" class="text-center display-3 fw-bold"></h2>
        </div>

            <script type="text/javascript">
                // testo da mostrare    
                var testo = "Tutti gli annunci";
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
    <div class="container-fluid ">
        <div class="row justify-content-center py-5 mb-5 ">
            

            @forelse ($articles as $article)
            <div class="col-12 col-md-4 my-5">
                <div class="card card-color-0">
                    <div class="border"></div>
                    <img src="/media/articoli.jpg" />


                    {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                    <a href="{{route('article.show', compact('article'))}}" class="text-white">
                        <h2>{{$article->title}}</h2>
                    </a>
                     <div id="cover" class="cover"></div>

                        <div id="open-content" class="open-content">
                        <a href="{{route('article.show', compact('article'))}}" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
                        <img id="open-content-image" src="" />
                        <div class="text" id="open-content-text">
                            <p>Stato: {{$article->state}}</p>
                      <p class="card-text">{{$article->description}}</p>

                      <p class="text-muted">Categoria {{$article->category->name}}</p>
                      <h4>Prezzo: {{$article->price}}</h4>
                        </div>
                        </div>
                      
                      
                      
                      <a href="{{route('article.show', compact('article'))}}" class="btn linkcustomAccent mt-3">Dettagli</a>
                   
                </div>
            </div>
            @empty
            <div class="d-flex justify-content-center">
                <h3>Non sono ancora stati inseriti annunci.</h3>
            </div>

             @endforelse


             
        </div>
    </div>
</x-layout>
