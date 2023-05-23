<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @forelse ($articles as $article)
                <div class="card">
                   
                    {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                    <div class="card-body ">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->description}}</p>
                      <h4>Prezzo: {{$article->price}}</h4>
                      <p>Stato: {{$article->state}}</p>
                     
                      <p>Categoria {{$article->category->name}}</p>
                      {{-- <a href="{{route('article.show')}}" class="btn btn-primary">Dettagli</a> --}}
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
</x-layout>