<x-layout>
    <x-header>
        <h2 class="text-center py-5 my-5">Ecco tutti gli annunci di {{ $category->name }}</h2>
    </x-header>
    <div class="container vh-100">
        <div class="row justify-content-center py-5 my-5">
            <div class="col-12 col-md-4">

                @forelse ($articles as $article)
                    <div class="card my-3">

                        {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                        <div class="card-body ">
                            <h5 class="card-title text-center">{{ $article->title }}</h5>
                            <p class="card-text text-center">{{ $article->description }}</p>
                            <p>Stato: {{ $article->state }}</p>

                            <div class=" container-fluid d-flex gap-5">
                                <h4>Prezzo: {{ $article->price }}</h4>
                                <p class="mx-0">Categoria {{ $article->category->name }}</p>
                            </div>
                            {{-- <a href="{{route('article.show')}}" class="btn btn-primary">Dettagli</a> --}}
                        </div>
                    </div>
                @empty
                    <div class="d-flex justify-content-center ">
                        <h3>Non sono ancora stati inseriti annunci.</h3>
                    </div>
                @endforelse

            </div>
        </div>
    </div>






</x-layout>
