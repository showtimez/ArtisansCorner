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
            <video class="vid" src="/media/videonuovo.mp4" autoplay muted loop></video>
        </div>
        <div class="content">
            <h1 class="fontCustom display-1">The Artisan's Corner</h1>
            <p class=" fontCustom text-center fs-3">Non c'è arte senza stile</p>
        </div>
    </x-header>
    <x-categorie>
    </x-categorie>
    <div class="container-fluid bg-dark">
        <div id="inizio" class="row">
            <div class="col-12 d-flex justify-content-center">
                <div>
                    <h2 class="text-center text-light pt-5 fontCustomannunci">Ultimi annunci</h2>
                    <p class="text-center text-light pb-5 fontCustomannunci ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nam ipsa ea sint aliquid laborum</p>
                </div>
            </div>
                <div class="swiper mySwiper col-12 my-5">
                    {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                <div class="swiper-wrapper">
                    @forelse ($articles as $article)
                        <div class="swiper-slide d-flex flex-column">
                            <h5>{{ $article->title }}</h5>
                            {{ $article->description }}</p>
                            <p>Stato: {{ $article->state }}</p>

                            <p>Categoria {{ $article->category->name }}</p>
                            <h4>Prezzo: {{ $article->price }}</h4>
                            <button class="btn btn-outline-dark"><a
                                    href="{{ route('article.show', compact('article')) }}"
                                    class="mt-5"></a>Dettagli</button>
                        </div>
                    @empty
                        <div class="d-flex justify-content-center">
                            <h3>Non sono ancora stati inseriti annunci.</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    {{-- counter --}}
    <section class="container-fluid bgCount d-flex align-items-center justify-content-center">
        <div class="row justify-content-between align-items-center">
            {{-- <h2 class="text-center"> Un pò di numeri </h2> --}}

                {{-- <img class="recensionecustom mx-3 rounded" src="/media/clientisodd.jpg" alt="recensione tipo"> --}}
                <p class=" text-center "><span id="clienti" class="increment-numbers d-block mx-3 ">0</span>Clienti Soddisfatti</p>

                {{-- <img class="recensionecustom mx-3" src="/media/scultura.jpg" alt="recensione tipo"> --}}
                <p class=" text-center"><span id="articoli" class="increment-numbers d-block mx-3">0</span>Articoli Venduti</p>

                {{-- <img class="recensionecustom mx-3" src="/media/review.png" alt="recensione tipo"> --}}
                <p class=" text-center"><span id="recensioni" class="increment-numbers d-block mx-3">0</span>Recensioni </p>

             </div>
</div>
    </section>



</x-layout>
