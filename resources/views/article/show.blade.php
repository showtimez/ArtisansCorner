<x-layout>
    <x-header>
        <div class="content">
        <h1 id="titoloHome">{{$article -> title}}</h1>
      </div>
    </x-header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Titolo: {{$article->title}}</h5>
                    <p class="card-text">Condizioni: {{$article->state}}</p>
                    <p class="card-text">Descrizione: {{$article->description}}</p>
                    <p class="card-text">Prezzo: {{$article->price}}€</p>
                    <a href="{{route('homepage')}}" class="btn btn-primary">Torna Indietro </a>
                    <a href="#" class="btn btn-primary">Categoria: {{$article -> category->name}}</a>
                    <p >Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
                  </div>
                </div>
            </div>
        </div>
    </div>

    

    



</x-layout>
