<x-layout>
    <div class="container ">
        <div class="row justify-content-center py-5 mb-5 ">
            <h2 class="text-center">Tutti gli annunci</h2>
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 d-flex justify-content-center   ">
                <div class="card mx-5 my-5">

                    {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                    <div class="card-body p-5">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p>Stato: {{$article->state}}</p>
                      <p class="card-text">{{$article->description}}</p>

                      <p class="text-muted">Categoria {{$article->category->name}}</p>
                      <h4>Prezzo: {{$article->price}}</h4>
                      <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettagli</a>
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
