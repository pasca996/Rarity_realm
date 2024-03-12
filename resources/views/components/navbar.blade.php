    <!-- Navbar Start -->
    <div class="container-fluid navbar-light mb-30">
        <div class="row px-xl-5 ">
            <div class="col-lg">
                <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0 px-0 fixed-top" id="navbar">
                    <a href="{{ route('welcome') }}">
                        <img class="navbar-brand" src="/img/logo.png" alt="logo" width="80">
                    </a>
                    <a href="{{ route('welcome') }}" class="text-decoration-none d-block">
                        <span
                            class="h2 text-uppercase text-dark px-2 rounded-left"style="background-color: #32b991">Rarity</span>
                        <span class="h2 text-uppercase text-light px-2 ml-n1 rounded-right"
                            style="background-color: #8260c2">Realm</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse  justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('welcome') }}" class="nav-item nav-link active h5">Home</a>
                            <a href="{{ route('announcement.index') }}" class="nav-item nav-link h5">Shop</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle h5" data-toggle="dropdown">Categorie
                                    <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu rounded-5 border-0 m-0">
                                    @foreach ($categories as $category)
                                        <a href="{{ route('categories.show', compact('category')) }}"
                                            class="dropdown-item">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link h5">Contattaci</a>
                            <a href="{{ route('announcement.create') }}" class="nav-item nav-link h5">Crea annuncio</a>
                            @auth
                                @if (Auth::user()->is_revisor)
                                    <div class="nav-item dropdown">
                                        <a href="" class="nav-link dropdown-toggle h5"
                                            data-toggle="dropdown">Revisore <i class="fa fa-angle-down mt-1">

                                            </i>
                                        </a>
                                        <div class="dropdown-menu rounded-5 border-0 m-0">

                                            <a href="{{ route('revisor.index') }}" class="dropdown-item">
                                                {{ App\Models\Announcement::toBeRevisionedCount() }} Richieste in
                                                sospeso
                                            </a>
                                        </div>
                                    </div>
                                @endif

                            @endauth
                        </div>

                        <form action="{{ route('announcement.search') }}" method="GET" class="form-inline">
                            <input class="form-control mr-sm-2" name="searched" type="search" placeholder="Cerca"
                                aria-label="Search">
                            <button class="btn my-2 my-sm-0" style="background-color: #65cbad" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </form>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                            @auth
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span
                                            class="h5"> Ciao, {{ Auth::user()->name }}</span> <i
                                            class="fa fa-angle-down mt-1"></i></a>
                                    <div class="dropdown-menu rounded-5 border-0 m-0">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <a href="{{ route('page.profile') }}" class="dropdown-item h5">Profilo</a>
                                            <button class="dropdown-item h5"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                Esci
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endauth
                            @guest
                                {{-- //Da visualizzare se sono un OSPITE (guest) --}}
                                <li class="nav-item">
                                    <a class="btn m-3" style="background-color: #65cbad"
                                        href="{{ route('login') }}">Accedi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn m-3" style="background-color: #65cbad"
                                        href="{{ route('register') }}">Registrati</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
            </div>
        </div>
        </nav>
    </div>
    </div>
    </div>

    <!-- Navbar End -->
