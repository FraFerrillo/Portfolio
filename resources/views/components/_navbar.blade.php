<nav class="navbar navbar-expand-lg navbar-light bg-light nav border-bottom border-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active mx-5" aria-current="page" href="/">Home</a>
                </li>
                @auth
                <li class="nav-item ">
                    <a class="nav-link mx-5" href="{{route('ads.create')}}">Nuovo annuncio</a>
                </li>
                @endauth
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
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
                </div>
                <li class="nav-item mx-5">
                    <form action="{{route('search')}}" method="GET" class="d-flex">
                        <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Ricerca</button>
                    </form>
                </li>
            </ul>
            </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav ms-auto me-2 mb-2 mb-lg-0">
                    <!--Login e register --importati da Laravel-->
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
    </div>
</nav>
