<x-layout>
    <x-header>
        <div class="container-fluid text-center bgCarta mb-3">
            <h2 id="titoloHome">{{ $article->title }}</h2>
        </div>
    </x-header>

    <div class="container vh-100">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">
                <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="mySwiper rounded" thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
                    @foreach ($article->images as $image)
                        <swiper-slide class=" {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ $image->getUrl(400, 300) }}" class="rounded" alt="Image">
                        </swiper-slide>
                    @endforeach
                </swiper-container>
                <swiper-container class="mySwiper2 " loop="true" space-between="10" slides-per-view="4"
                    free-mode="true" watch-slides-progress="true">
                    @foreach ($article->images as $image)
                        <swiper-slide class=" {{ $loop->first ? 'active' : '' }} mx-1 rounded">

                            <img class="img-fluid" src="{{ $image->getUrl(400, 300) }}" alt="Image">

                        </swiper-slide>
                    @endforeach

                </swiper-container>
            </div>

            <div class="col-12 col-md-6 border rounded bg-white p-5 mb-2">
                <h3 class="text-center  tracking-in-expand-fwd fw-bold pb-4">{{ $article->title }}</h3>
                <p>{{__('ui.stato')}}: {{ trans('condizioni.' . $article->state) }}</p>
                <p>{{__('ui.descrizione')}}: <br>{{ $article->description }}</p>
                <hr>
                <p>{{__('ui.prezzo')}}: {{ $article->price }}€</p>
                <div class="col-12 d-flex justify-content-center">
                    <a href="{{route('article.index')}}" class="btn btn-primary">{{__('ui.indietro')}}</a>
                    <a class="btn text-center"
                            href="{{ route('category', ['category' => $article->category]) }}">{{ __('ui.categoria') }}:
                            {{ trans('categories.' . $article->category->name) }}</a>

                    </div><p>{{ __('ui.data') }}: {{ $article->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
    </div>



    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">

                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div> --}}
    {{-- <div class="carousel-inner">

                        <div class="carousel-inner">
                            @foreach ($article->images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                                    <img src="{{ $image->getUrl(400, 300) }}" alt="Image">
                                    @if (Auth::user()->is_revisor)
                                        <div class="col-md-3 border-end">
                                            <h5 class="tc-accent mt-3">Tags</h5>
                                            <div class="p-2">
                                                @if ($image->labels)
                                                    @foreach ($image->labels as $label)
                                                        <p class="d-inline">{{ $label }},</p>
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
                                        <a href="{{ route('homepage') }}" class="btn btn-primary">Torna Indietro</a>
                                    @endif
                                </div>


                            @endforeach

                        </div> --}}


    {{-- </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="text-dark">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="text-dark">Next</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
    </div>
    <div class="card-body">
        <h5 class="card-title">Titolo: {{ $article->title }}</h5>
        <p class="card-text">Condizioni: {{ $article->state }}</p>
        <p class="card-text">Descrizione: {{ $article->description }}</p>
        <p class="card-text">Prezzo: {{ $article->price }}€</p>
        @if (Auth::user()->is_revisor)
            <a href="{{ route('revisor.index') }}" class="btn btn-primary">Torna alla dashboard </a>
        @else
            <a href="{{ route('homepage') }}" class="btn btn-primary">Torna Indietro</a>
        @endif

        <p><a href="{{ route('category', ['category' => $article->category]) }}">Categoria:
                {{ $article->category->name }}</a></p>

        <p>Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p> --}}



    {{-- @if (Auth::user()->is_revisor)
            <div class="col-md-3 border-end">
                <h5 class="tc-accent mt-3">Tags</h5>
                <div class="p-2">
                    @if ($image->labels)
                        @foreach ($image->labels as $label)
                            <p class="d-inline">{{ $label }},</p>
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
            <a href="{{ route('homepage') }}" class="btn btn-primary">Torna Indietro</a>
        @endif --}}
    {{--
    </div>
    </div>
    </div>
    </div>
    </div> --}}





</x-layout>
