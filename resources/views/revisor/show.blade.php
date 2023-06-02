<x-layout>
    <x-header>
        <div class="container-fluid text-center bgCarta mb-3">
            <h2 id="titoloHome">{{ $article->title }}</h2>
        </div>
    </x-header>

    <div class="container-fluid my-2 ">
        <div class="row my-5">
            <div class="col-12 col-md-6  text-center d-flex my-5">

                @foreach ($article->images as $image)
                    <div class="container border rounded {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ $image->getUrl(400, 300) }}" alt="Image">
                    </div>
                    @if (Auth::user()->is_revisor)
                        <div class="col-md-3 border-end shadow border rounded">
                            <h5 class="tc-accent mt-3">Tags</h5>
                            <div class="p-2">
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <p class="d-inline">{{ $label }},</p>
                                    @endforeach
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="tc-accent">{{ __('ui.imgRevisor') }}</h5>
                                <p>{{ __('ui.Adulti') }}<span class="{{ $image->adult }}"></span></p>
                                <p>{{ __('ui.Satira') }}<span class="{{ $image->spoof }}"></span></p>
                                <p>{{ __('ui.Medicina') }}<span class="{{ $image->medical }}"></span></p>
                                <p>{{ __('ui.Violenza') }}<span class="{{ $image->violence }}"></span></p>
                                <p>{{ __('ui.Contenuto-Ammiccante') }}<span class="{{ $image->racy }}"></span></p>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('homepage') }}" class="btn btn-primary">{{ __('ui.indietro') }}</a>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">


                <p class="card-text text-center">{{ __('ui.stato') }}: {{ $article->state }}</p>
                <p class="card-text text-center">{{ __('ui.descrizione') }}: {{ $article->description }}</p>
                <p class="card-text text-center">{{ __('ui.prezzo') }}: {{ $article->price }}€</p>
                <div class="container ">
                    <div class="row justify-content-center">
                        @if (Auth::user()->is_revisor)
                            <a href="{{ route('revisor.index') }}"
                                class="btn btn-primary">{{ __('ui.backToDash') }}</a>
                        @else
                            <a href="{{ route('homepage') }}" class="btn btn-primary">home</a>
                        @endif
                        <a class="btn text-center"
                            href="{{ route('category', ['category' => $article->category]) }}">{{ __('ui.categoria') }}:
                            {{ trans('categories.' . $article->category->name) }}</a>
                        <p>{{ __('ui.data') }}: {{ $article->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>
