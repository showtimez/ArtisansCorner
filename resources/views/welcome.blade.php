<x-layout>
    <x-header>
      <div class="d-flex justify-content-center align-items-center">
        <h1 class="text-center" id="titoloHome">The Artisan's Corner</h1>
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


<div class="container-fluid my-5">
  <div class="row justify-content-center">
    <h2 class="display-1 text-center my-5">Gli Ultimi Articoli Inseriti</h2>
    @foreach ($articles as $article )  
    <div class="col-12 col-md-4 ">
      <div class="background-one">
        <div class="link-container">
          <h5 class="link-one display-6">{{$article->title}}</h5>
          <h5 class="link-one">{{$article->price}} £</h5>
          <p class="link-one">{{$article->state}}</p>
          <a href="#">Categoria: {{$article -> category->name}}</a>          
          <p class="link.one">Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
          <a href="{{route('article.show', compact('article'))}}" class="btn btn-dark">Visualizza</a>
        </div>
      </div>
        
    </div>
    @endforeach
  </div>
</div>

</x-layout>
