<x-layout>
    @if (session()->has('richiestaRevisor'))
        <div class="alert alert-success text-center mb-0">
            {{ session('richiestaRevisor') }}
        </div>
    @endif
    @if (session()->has('answerRevisor'))
        <div class="alert alert-success text-center mb-0">
            {{ session('answerRevisor') }}
        </div>
    @endif
    <x-header>
        <div class="d-flex justify-content-center align-items-center">
            <video class="vid" src="/media/TheArtisansCorner.mp4" autoplay muted loop></video>
        </div>
        <div class="content text-center ">
            <h1 class="fontCustom display-1">The Artisan's Corner</h1>
            <p class=" fontCustom text-center fs-3">{{ __('ui.subtitleWelcome') }}</p>
        </div>
    </x-header>
    <x-categorie>
    </x-categorie>
<section>
    <div class="container-fluid bg-articles">
        <div id="inizio" class="row justify-content-center ">
            <div class="col-12 d-flex justify-content-center">
                <div>
                    <h2 class="text-center text-light py-5 fontCustomannunci">{{ __('ui.ultimiAnnunci') }}</h2>
                    {{-- <p class="text-center text-light pb-5 fontCustomannunci ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nam ipsa ea sint aliquid laborum</p> --}}
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="swiper mySwiper pb-5 ">
                    <div class="swiper-wrapper ">
                        @forelse ($articles as $article)
                        {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                            <div class="swiper-slide  flex-column">

                                        <h5>{{ $article->title }}</h5>
                                        {{ $article->description }}</p>
                                        <p>{{ __('ui.stato') }}{{ $article->state }}</p>
                                        <p>{{ __('ui.categoria') }} {{ $article->category->name }}</p>
                                        <h4>{{ __('ui.prezzo') }} {{ $article->price }}</h4>


                                        <a href="{{ route('article.show', compact('article')) }}"
                                        class="mt-5"><button class="btn btn-outline-dark">{{ __('ui.dettagli') }}</button></a>
                            </div>
                        @empty
                            <div class=" col-12">
                                <h3 class="text-center text-light">{{ __('ui.noArtInserted') }}</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    {{-- counter --}}
<section class="container-fluid bgCount">
    <div class="row">
        <hr class="text-dark">
        <div class="col-12 col-md-4 text-center">
            <span id="clienti" class="increment-numbers ">0</span><span class=" mx-1 increment-numbers ">%</span>
            <p class=" text-center fw-bold fs-1 ">{{ __('ui.unPoDiNumeri1') }}</p>
        </div>
        <div class="col-12 col-md-4 text-center">
            <span id="articoli" class="increment-numbers">0</span><span class=" mx-1 increment-numbers ">+</span>
            <p class=" text-center fw-bold fs-1">{{ __('ui.unPoDiNumeri2') }}</p>
        </div>
        <div class="col-12 col-md-4 text-center">
            <span id="recensioni" class="increment-numbers">0</span><span class=" mx-1 increment-numbers ">‟</span>
            <p class=" text-center fw-bold fs-1">{{ __('ui.unPoDiNumeri3') }}</p>
        </div>
        </div>
        <hr class="text-dark">
    </div>
</section>



</x-layout>
