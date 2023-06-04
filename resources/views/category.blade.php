{{-- <x-layout>
    <x-header>
        <div class="container-fluid bgCarta">
            <hr class="text-dark">
            <h2 id="categoria-nome" class="text-center py-5 my-5 testo display-3">
                {{ trans('categories.' . $category->name) }}</h2>
            <hr class="text-dark">
        </div>
        <span id="testo"></span>
    </x-header>
    <div class="container-fluid ">
        <div class="row justify-content-center py-5 mb-5 ">
            @forelse ($article_checked_ok->category as $article)
                <div class="flip-card m-5">
                    <div class="flip-card-inner ">
                        <div class=" flip-card-front d-flex justify-content-around rounded">
                            <img class="imgC rounded"src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(400, 300): url('./media/noImg.png') }}"
                                alt="no img">
                        </div>
                        <div class="flip-card-back rounded">
                            <h5 class="mt-5">{{ $article->title }}</h5>
                            <p>{{ $article->description }}</p>
                            <p>{{ __('ui.stato') }}: {{ trans('condizioni.' . $article->state) }}</p>
                            <h4>{{ __('ui.prezzo') }}: {{ $article->price }}€</h4>
                            <p class="mx-0">{{ __('ui.categoria') }} {{ trans('categories.' . $category->name) }}</p>
                            <a href="{{ route('article.show', compact('article')) }}"
                                class="btn linkcustomAccent2  px-5 shadow">{{ __('ui.dettagli') }}</a>
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
</x-layout> --}}
<x-layout>
    <x-header>
        <div class="container-fluid bgCarta">
            <hr class="text-dark">
            <h2 id="categoria-nome" class="text-center py-5 my-5 testo display-3">
                {{ trans('categories.' . $category->name) }}</h2>
            <hr class="text-dark">
        </div>
        <span id="testo"></span>
    </x-header>
    <div class="container ">
        <div class="row justify-content-center py-5 mb-5 ">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4">
                <div class="flip-card m-5 ">
                    <div class="flip-card-inner ">
                        <div class=" flip-card-front d-flex justify-content-around rounded">
                            <img class="imgC rounded"src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(400, 300): url('./media/noImg.png') }}"
                                alt="no img">
                        </div>
                        <div class="flip-card-back rounded">
                            <h4 class="mt-2 text-dark">{{ $article->title }}</h4>
                            <p>{{ $article->description }}</p>
                            <p>{{ __('ui.stato') }}: {{ trans('condizioni.' . $article->state) }}</p>
                            <h4>{{ __('ui.prezzo') }}: {{ $article->price }}€</h4>
                            <p class="mx-0">{{ __('ui.categoria') }} {{ trans('categories.' . $category->name) }}</p>
                            <div class="d-flex justify-content-center">
                            <a href="{{ route('article.show', compact('article')) }}"
                                class="btn linkcustomAccent2  px-5 shadow">{{ __('ui.dettagli') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="d-flex justify-content-center min-vh-100 align-items-center">
                    <h3>{{ __('ui.noArtInserted') }}</h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
