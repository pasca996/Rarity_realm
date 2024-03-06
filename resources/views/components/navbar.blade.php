    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5 ">
            <div class="col-lg">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="shop.html" class="nav-item nav-link">Shop</a>
                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categorie <i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                            <a href="{{route ('announcement.create')}}" class="nav-item nav-link">Crea annuncio</a>
                        </div> 
                                           
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                                @auth
                                <li>
                                    <div class="dropdown text-end">
                                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle " id="dropdownUser1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="/img/login icon.jpg" alt="mdo" width="32" height="32"
                                                class="rounded-circle">
                                        </a>
                                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                                            <li>
                                                <span> Ciao, {{Auth::user()->name}}</span>
                                            </li>
                                            <li>
                                                <form action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                    <button class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                                        Esci
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endauth
                                @guest
                                {{-- //Da visualizzare se sono un OSPITE (guest) --}}
                                <li class="nav-item">
                                    <a class="btn btn-primary m-3" href="{{route('login')}}">Accedi</a>
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
