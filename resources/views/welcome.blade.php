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
    @if (session()->has('access.denied'))
    <div class="alert alert-success text-center mb-0">
        {{ session('access.denied') }}
    </div>
@endif
    <x-header>

        <div class="miocontainer">
            <video class="videomio" src="/media/TheArtisansCorner.mp4" autoplay muted loop></video>
            <div class="content">
                <h1 class="fontCustom display-1">The Artisan's Corner</h1>
                <p class=" fontCustom text-center fs-3">{{ __('ui.subtitleWelcome') }}</p>
            </div>
        </div>
    </x-header>
    <x-categorie>
    </x-categorie>
    <section id="swiperHome">
        <div class="container-fluid bg-articles">
            <div id="inizio" class="row justify-content-center ">
                <div class="col-12 d-flex justify-content-center mb-5">
                    <div>
                        <h2 class="text-center text-light py-3 fontCustomannunci">{{ __('ui.ultimiAnnunci') }}</h2>
                    </div>
                </div>
                <div class="col-12 d-flex ">
                    <div class="swiper mySwiper pb-5  ">
                        <div class="swiper-wrapper">
                            @forelse ($articles as $article)
                                <div class="swiper-slide flex-column ">
                                    <div class="">
                                        <div class="pb-2">

                                            <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : url('./media/noImg.png')}}" class="mx-3 rounded " alt="no img">
                                        </div>
                                        {{-- <div class=" px-4 two-columns">
                                            <h5>{{ $article->title }}</h5><br>
                                            <p>{{ __('ui.stato') }}: {{ trans('condizioni.' . $article->state) }}</p>
                                            <p>{{ __('ui.categoria') }}: {{ trans('categories.' . $article->category->name) }}</p>
                                            <p class="text-muted fs-italic">{{ __('ui.data') }} {{ $article->created_at }}</p>
                                            <h4>{{ __('ui.prezzo') }}: {{ $article->price }} €</h4>
                                        </div> --}}
                                    </div>
                                    <a href="{{ route('article.show', compact('article')) }}"
                                    class=""><button class="btn btn-outline-dark">{{ __('ui.dettagli') }}</button></a>
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
