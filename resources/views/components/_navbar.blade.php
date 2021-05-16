<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-1 border border-bottom shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/image/LOGOP (1).png" height="60px" width=60px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active hoverborder" aria-current="page" href="{{route('ads.index')}}">Tutti gli
                        annunci</a>
                </li>
                <li class="nav-item">
                    @auth
                    <a class="nav-link active hoverborder" aria-current="page" href="{{route('ads.create')}}">Crea
                        annuncio</a>
                    @else
                    <a class="nav-link active hoverborder" aria-current="page" href="{{ route('register') }}">Crea
                        annuncio</a>
                    @endauth
                </li>
            </ul>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <div class="d-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle categorieclass" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item" href="{{route('public.ads.category',[
                                    $category->name,
                                    $category->id
                                ])}}">{{$category->name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <form action="{{route('search')}}" method="GET" class="d-flex">
                        <input class="form-control me-2 nav-i" type="search" name="q" placeholder="Cerca su Presto..."
                            aria-label="Search">
                        <button class="shadow btnsearch " type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
                @auth
                <li class="nav-item">
                    <a class="nav-link active hoverborder" aria-current="page" href="{{route('contact_us')}}">Diventa
                        Revisore</a>
                </li>
                @endauth
                {{-- <li class="nav-item">
                        <a class="nav-link active hoverborder" aria-current="page" href="{{route('contact_us')}}">Contattaci</a>
                </li> --}}
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <button class="btn-lr mx-2 border-0 shadow">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </button>
                </li>

                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <button class="btn-lr mx-2 border-0 shadow">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </button>
                </li>
                @endif
                @else

                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('revisor.home')}}">
                        Revisor Home
                        <span class="badge rounded-pill bg-warning">
                            {{\App\Models\Ad::ToBeRevisionedCount()}}
                        </span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->is_admin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.home')}}">
                        Admin Home
                        <span class="badge rounded-pill bg-warning">
                            {{\App\Models\User::ToBeRevisionedCount()}}
                        </span>
                    </a>
                </li>
                @endif

                <div class="dropdown">
                    <a class="btn btn-lr mx-2 border-0 shadow dropdown-toggle" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>
