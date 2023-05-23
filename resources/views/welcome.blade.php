<x-layout>
    <x-header>
        <div class="content">
        <h1 id="titoloHome">The Artisan's Corner</h1>
      </div>
    </x-header>

<x-videoHome>
    <video autoplay muted loop id="myVideo">
        <source src="/media/video.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>


</x-videoHome>


<div class="container">
  <div class="row justify-content-center">
    <h2>Gli Ultimi Articoli Inseriti</h2>
    @foreach ($articles as $article )  
    <div class="col-12 col-md-8 my-4">
      <div class="card">
        <img src="https://picsum.photos/200" class="card-img-top p-4 rounded" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->price}}</p>
          <p class="card-text">{{$article->state}}</p>
          <a href="#" class="btn btn-primary">Visualizza</a>
          <a href="#" class="btn btn-primary">Categoria: {{$article -> category->name}}</a>
          <p class="card">Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

</x-layout>
