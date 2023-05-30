<nav class="navbar navbar-expand-lg bg-custom navbar-dark sticky-top ">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">
            <img src="/public/media/Logo.png" alt="" >
        </a>
        <ul>
            <span class="navbar-brand brand-name mx-auto">
                <a href="{{ route('homepage') }}"><img width="100" height="55"
                    src="/media/logowhite.png"></a>
                </span>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">{{ __('ui.navAnnunci') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ __('ui.navCategorie') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                        href="{{ route('category', compact('category')) }}">{{ trans('categories.' . $category->name) }}</a></li>
                    <hr>
                         @endforeach
                    </ul>
                </li>




                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.create') }}">{{ __('ui.navCreaAnnuncio') }}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.navCiao') }} {{ Auth::user()->name }}

                    </a>
                    <ul class="dropdown-menu">

                    @if (!Auth::user()->is_revisor)
                    <li>
                        <a class="dropdown-item" href="{{ route('revisor.collabora') }}">{{ __('ui.navLavConNoi') }}</a>
                    </li>
                    @endif
                    @if (Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('revisor.index') }}">
                            {{ __('ui.navAreaRev') }}
                            @if (App\Models\Article::toBeRevisionedCount() > 0)
                            <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ App\Models\Article::toBeRevisionedCount() }}
                            <span class="visually-hidden">
                                Articoli da revisionare
                            </span>
                        </span>
                        @endif
                    </a>
                </li>
                <hr>
                @endif
                <li>
                    <a class="dropdown-item" href="#"
                    onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                </li>
                <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ __('ui.navAreariservata') }}
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('autenticate') }}">{{ __('ui.navAccess') }}</a></li>
                    {{-- <hr> --}}
                    {{-- <li><a class="dropdown-item" href="{{ route('autenticate') }}">Registrati</a></li> --}}

                </ul>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seleziona Lingua
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#"><x-_locale lang='it' nation='it' />Italiano</a></li>
                        <li><a class="dropdown-item" href="#"><x-_locale lang='en' nation='en' />English</a></li>
                        <li><a class="dropdown-item" href="#"><x-_locale lang='es' nation='es' />Español</a></li>
                    </ul>
                </li>
            </li>
        </ul>
        @endauth

    </ul>
</div>
<form action="{{ route('articles.search') }}" method="GET" class="d-flex" role="search">
    <input class="form-control me-2" name="searched" type="search" placeholder="Search" aria-label="Search">
    <button class="px-3 btnCustom" type="submit">Search</button>
</form>
</div>
</nav>
