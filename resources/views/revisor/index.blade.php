<x-layout>

    <x-header>
        <div class="bgCarta">
            <h2 id="testo" class="text-center py-5 my-5 display-4 fw-bold" >Articoli da revisionare</h2>
        </div>
        <script type="text/javascript">
            // testo da mostrare
            var testo = "Articoli da revisionare";
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

            <div class="container  my-5 py-5">
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-6 d-flex justify-content-center   ">
                        <h3 class="text-center display-6">{{$article_to_check ? "Ecco gli annunci da revisionare": "Non ci sono annunci da revisionare"}}</h3>
                    </div>
                </div>
            </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 ">
                <h2 class="text-center">Accettati</h2>
                @if($article_checked_ok)
                @foreach ( $article_checked_ok as $element )
                    <div class="card my-3">
                        {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                        <div class="card-body p-5">
                            <h5 class="card-title">{{$element->title}}</h5>
                            <p class="card-text">{{$element->description}}</p>
                            <h4>Prezzo: {{$element->price}}</h4>
                            <p>Stato: {{$element->state}}</p>
                            {{-- <p>Categoria {{$article_to_check->category->name}}</p> --}}
                            <div class="container d-flex gap-5">
                                <form action="{{route('revisor.nullArticle', ['article'=>$element])}}"method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow">Manda in revisione</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="col-12 col-md-4 ">
                <h2 class="text-center">Da revisionare</h2>
                @if($article_to_check)
                @foreach ( $article_to_check as $element )
                    <div class="card my-3">
                        {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                        <div class="card-body p-5">
                            <h5 class="card-title">{{$element->title}}</h5>
                            <p class="card-text">{{$element->description}}</p>
                            <h4>Prezzo: {{$element->price}}</h4>
                            <p>Stato: {{$element->state}}</p>
                            {{-- <p>Categoria {{$article_to_check->category->name}}</p> --}}
                            <div class="container d-flex gap-5">
                                <form action="{{route('revisor.acceptArticle', ['article'=>$element])}}"method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow">Accetta</button>
                                </form>

                                <form action="{{route('revisor.rejectArticle', ['article'=>$element])}}"method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
                <div class="col-12 col-md-4">
                    <h2 class="text-center">Rifiutati</h2>
                    @if($article_checked_ko)
                    @foreach ( $article_checked_ko as $element )
                        <div class="card my-3">
                            {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                            <div class="card-body p-5">
                                <h5 class="card-title">{{$element->title}}</h5>
                                <p class="card-text">{{$element->description}}</p>
                                <h4>Prezzo: {{$element->price}}</h4>
                                <p>Stato: {{$element->state}}</p>
                            </div>
                            {{-- <p>Categoria {{$article_to_check->category->name}}</p> --}}
                            <div class="container d-flex gap-5">
                                    <form action="{{route('revisor.nullArticle', ['article'=>$element])}}"method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success shadow">Manda in revisione</button>
                                    </form>

                            </div>
                        </div>
                        @endforeach
                        @endif
                </div>

            </div>
        </div>
    </div>
</x-layout>
