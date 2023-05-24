<x-layout>

<x-header>
    <h2>Articoli da revisionare</h2>
</x-header>

            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-4 d-flex justify-content-center   ">
                        <h1 class="display-2">{{$article_to_check ? "Ecco l'annuncio da revisionare": "Non ci sono annunci da revisionare"}}</h1>
                    </div>
                </div>
            </div>

            @if($article_to_check)
                <div class="card mx-5 my-5">
                    {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                    <div class="card-body p-5">
                    <h5 class="card-title">{{$article_to_check->title}}</h5>
                    <p class="card-text">{{$article_to_check->description}}</p>
                    <h4>Prezzo: {{$article_to_check->price}}</h4>
                    <p>Stato: {{$article_to_check->state}}</p>
                    {{-- <p>Categoria {{$article_to_check->category->name}}</p> --}}
        
                    <form action="{{route('revisor.acceptArticle', ['article'=>$article_to_check])}}"method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                    </form>

                    <form action="{{route('revisor.rejectArticle', ['article'=>$article_to_check])}}"method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                        </form>
                    </div>
                </div>
            @endif

</x-layout>