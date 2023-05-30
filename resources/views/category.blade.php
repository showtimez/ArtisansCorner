<x-layout>
    <x-header>
        <div class="container-fluid bgCarta">

        {{-- <h2 class="py-5 my-5 display-5 fw-bold" id="testo">Ecco tutti gli annunci di</h2>  --}}
        <h2 id="categoria-nome" class="text-center py-5 my-5 testo display-3">  {{ trans('categories.' . $category->name) }}</h2>
        </div>
            {{-- <span id="testo"></span> --}}




    </x-header>
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-12 col-md-4 d-flex align-items-center colC">

                @forelse ($articles as $article)

                    <div class="flip-card  m-5 ">
                        <div class="flip-card-inner ">
                          <div class="flip-card-front d-flex justify-content-around rounded">
                            <img class="imgC rounded"src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : url('./media/noImg.png')}}" alt="no img">
                          </div>
                          <div class="flip-card-back rounded">
                            <h5 class="mt-5">{{ $article->title }}</h5>
                            <p>{{ $article->description }}</p>
                            <p>{{ __('ui.stato') }}: {{ $article->state }}</p>

                            <h4>{{ __('ui.prezzo') }}: {{ $article->price }}</h4>
                            <p class="mx-0">{{ __('ui.categoria') }} {{ $article->category->name }}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn linkcustomAccent  px-5 shadow">{{ __('ui.dettagli') }}</a>
                          </div>
                        </div>
                    </div>

                      @empty
                      <div class="d-flex justify-content-center ">
                          <h3>{{ __('ui.noArtInserted') }}</h3>
                      </div>
                      @endforelse


            </div>

        </div>
    </div>

</x-layout>
