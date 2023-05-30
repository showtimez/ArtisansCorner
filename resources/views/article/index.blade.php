<x-layout>
    <x-header>
        <div class="bgCarta">
            <h2 id="testo" class="text-center display-3 fw-bold"></h2>
        </div>

        <script type="text/javascript">
            // testo da mostrare
            var testo = "{{ __('ui.allArticles') }}";
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
            <div class="col-12 col-md-4">
                <div class="card card-color-0 mt-4 ">
                    <div class="border "></div>
                    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : url('./media/noImg.png')}}" alt="no img">


                    {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                    <a href="{{route('article.show', compact('article'))}}" class="text-white">
                        <h3>{{$article->title}}</h3>
                    </a>
                    <div id="cover" class="cover"></div>

                    <div id="open-content" class="open-content">
                        <a href="{{route('article.show', compact('article'))}}" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
                        <img id="open-content-image" src="" />
                        <div class="text" id="open-content-text">
                            <p>{{ __('ui.Stato') }}: {{$article->state}}</p>
                            <p class="card-text">{{$article->description}}</p>

                            <p class="text-muted">{{ __('ui.categoria') }}{{$article->category->name}}</p>
                            <h4>{{ __('ui.prezzo') }}:{{$article->price}}</h4>
                        </div>
                    </div>

                </div>
                <div class="text-center mb-5"><a href="{{route('article.show', compact('article'))}}" class="btn linkcustomAccent mt-3 px-5 shadow">{{ __('ui.dettagli') }}</a></div>
            </div>
            @empty
            <div class="d-flex justify-content-center">
                <h3>{{ __('ui.noArtInserted') }}</h3>
            </div>

            @endforelse



        </div>
    </div>
</x-layout>
