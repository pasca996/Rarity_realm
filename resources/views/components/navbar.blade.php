    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5 ">
            
            <div class="col-lg">
                
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="{{route('welcome')}}">
                        <img class="navbar-brand" src="/img/logo.png" alt="logo" width="80">
                    </a>
                    <a href="{{route('welcome')}}" class="text-decoration-none d-block">
                        <span class="h1 text-uppercase text-dark bg-light px-2 rounded-left">Rarity</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1 rounded-right">Realm</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('welcome')}}" class="nav-item nav-link active">Home</a>
                            <a href="shop.html" class="nav-item nav-link">Shop</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categorie <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu rounded-5 border-0 m-0">
                                    @foreach ($categories as $category )    
                                    <a href="{{route('categories.show', compact('category'))}}" class="dropdown-item">{{$category->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                            <a href="{{route ('announcement.create')}}" class="nav-item nav-link">Crea annuncio</a>
                        </div> 
                                           
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                                @auth
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span> Ciao, {{Auth::user()->name}}</span> <i
                                            class="fa fa-angle-down mt-1"></i></a>
                                    <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                         <form action="{{route('logout')}}" method="POST">
                                                        @csrf
                                                        <button class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                                            Esci
                                                        </button>
                                                    </form>
                                    </div>
                                </div>
                                @endauth
                                @guest
                                {{-- //Da visualizzare se sono un OSPITE (guest) --}}
                                <li class="nav-item">
                                    <a class="btn btn-primary m-3 " href="{{route('login')}}">Accedi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary m-3" href="{{route('register')}}">Registrati</a>
                                </li>
                                @endguest
                            </ul> 
                    </div>
                </div>
                </nav>
            </div>
        </div>
    </div>
    
    <!-- Navbar End -->
