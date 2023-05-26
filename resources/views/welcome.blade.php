<x-layout>
    @if (session()->has('richiestaRevisor'))
        <div class="alert alert-success text-center">
            {{ session('richiestaRevisor') }}
        </div>
    @endif
    @if (session()->has('answerRevisor'))
        <div class="alert alert-success text-center">
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
    <div class="container-fluid  bg-custom">
        <div class="row justify-content-center" id="inizio">
            <h2 class="text-center text-white py-5 display-2 fontCustom">Ultimi annunci</h2>


            <div class="swiper mySwiper col-12 my-5">

                {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                <div class="swiper-wrapper">
                    @forelse ($articles as $article)
                        <div class="swiper-slide d-flex flex-column">
                            <h5>{{ $article->title }}</h5>
                            <p>{{ $article->description }}</p>
                            <p>Stato: {{ $article->state }}</p>

                            <p>Categoria {{ $article->category->name }}</p>
                            <h4>Prezzo: {{ $article->price }}</h4>
                            <button class="btn btn-outline-dark"><a href="{{ route('article.show', compact('article')) }}"
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
   <section class="container-fluid bgCount">
    <div class="row">
        {{-- <h2 class="text-center"> Un pò di numeri </h2> --}}
        <div class="col-12 col-lg-3 d-flex  ">

           
        
            <p class="lead text-center"><span id="clienti" class="increment-numbers d-block">0</span> Clienti Soddisfatti</p>
            <p class="lead text-center"><span id="articoli" class="increment-numbers d-block">0</span> Articoli Venduti</p>
            <p class="lead text-center"><span id="recensioni" class="increment-numbers d-block">0</span> Recensioni</p>
        
            </div>
    </div>
   </section>
   


</x-layout>
