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
        <div class="container-fluid position-relative bg-custom">
            <div class="row justify-content-center  ">
                <h2 class="text-center">Tutti gli annunci</h2>
                @forelse ($articles as $article)
                    <div class="col-12 col-md-4 d-flex justify-content-center   ">
                        <div class="card mx-5 my-5">

                            {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                            <div class="card-body p-5">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->description }}</p>
                                <p>Stato: {{ $article->state }}</p>

                                <p>Categoria {{ $article->category->name }}</p>
                                <h4>Prezzo: {{ $article->price }}</h4>
                                <a href="{{ route('article.show', compact('article')) }}"
                                    class="btn btn-primary">Dettagli</a>
                            </div>
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
