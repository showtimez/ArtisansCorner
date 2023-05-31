<x-layout>
    <x-header>
        <div class="container-fluid text-center bgCarta mb-3">
        <h2 id="titoloHome">{{$article -> title}}</h2>
      </div>
    </x-header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">

                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">

                        <div class="carousel-inner">
                            @foreach ($article->images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                                    <img src="{{ $image->getUrl(400,300) }}" alt="Image">
                                    @if(Auth::user()->is_revisor)
                    <div class="col-md-3 border-end">
                        <h5 class="tc-accent mt-3">Tags</h5>
                        <div class="p-2">
                             @if ($image->labels)
                             @foreach ($image->labels as $label)
                             <p class="d-inline">{{$label}},</p>
                             @endforeach
                             @endif
                        </div>

                        <div class="card-body">
                            <h5 class="tc-accent">Revisione Immagini</h5>
                            <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                            <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                            <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                            <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                            <p>Contenuto Ammiccante: <span class="{{ $image->racy }}"></span></p>
                        </div>
                    </div>
                    @else
                    <a href="{{route('homepage')}}" class="btn btn-primary">Torna Indietro</a>
                    @endif
                                </div>


                            @endforeach

                        </div>


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="text-dark">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="text-dark">Next</span>
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Titolo: {{$article->title}}</h5>
                    <p class="card-text">Condizioni: {{$article->state}}</p>
                    <p class="card-text">Descrizione: {{$article->description}}</p>
                    <p class="card-text">Prezzo: {{$article->price}}€</p>
                    @if(Auth::user()->is_revisor)

                    <a href="{{route('revisor.index')}}" class="btn btn-primary">Torna alla dashboard </a>
                    @else
                    <a href="{{route('homepage')}}" class="btn btn-primary">Torna Indietro</a>
                    @endif

                    <p><a href="{{route('category',['category'=>$article->category])}}">Categoria: {{$article -> category->name}}</a></p>

                    <p >Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>



                    @if(Auth::user()->is_revisor)
                    <div class="col-md-3 border-end">
                        <h5 class="tc-accent mt-3">Tags</h5>
                        <div class="p-2">
                             @if ($image->labels)
                             @foreach ($image->labels as $label)
                             <p class="d-inline">{{$label}},</p>
                             @endforeach
                             @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <h5 class="tc-accent">Revisione Immagini</h5>
                            <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                            <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                            <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                            <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                            <p>Contenuto Ammiccante: <span class="{{ $image->racy }}"></span></p>
                        </div>
                    </div>
                    @else
                    <a href="{{route('homepage')}}" class="btn btn-primary">Torna Indietro</a>
                    @endif

                  </div>
                </div>
            </div>
        </div>
    </div>





</x-layout>
