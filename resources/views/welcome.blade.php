<x-layout>
    <x-header>
      <div class="d-flex justify-content-center align-items-center">
        <h1 class="text-center " id="titoloHome">The Artisan's Corner</h1>
      </div>
      <video autoplay muted loop id="myVideo">
        <source src="/media/video1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </x-header>

{{-- <x-videoHome>
    <video autoplay muted loop id="myVideo">
        <source src="/media/video1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>


</x-videoHome> --}}


<div class="container">
    <div class="row justify-content-center ">
        <h2 class="text-center">Tutti gli annunci</h2>
        @forelse ($articles as $article)
        <div class="col-12 col-md-4 d-flex justify-content-center   ">
            <div class="card mx-5 my-5">

                {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="foto di {{$article->title}}"> --}}
                <div class="card-body p-5">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->description}}</p>
                  <p>Stato: {{$article->state}}</p>

                  <p>Categoria {{$article->category->name}}</p>
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
