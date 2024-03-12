<x-main>
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li style="background-color: #65cbad" data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li style="background-color: #65cbad" data-target="#header-carousel" data-slide-to="1"></li>
                        <li style="background-color: #65cbad" data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/img/img_welcome/table 1-1840000_640.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Rarity Realm</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn h4">Non è assurdo avere tutte queste cose e non usarle mai?</p>
                                    <a class="btn py-2 px-4 mt-3 animate__animated animate__fadeInUp" style="background-color: #65cbad"
                                        href="{{route ('announcement.create')}}">Vendi ora</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/img/img_welcome/mobili_01.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Hai oggetti da collezione?</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn h4">Dai al tuo usato una seconda occasione: vendi quello che non usi più, subito.</p>
                                    <a class="btn py-2 px-4 mt-3 animate__animated animate__fadeInUp" style="background-color: #65cbad"
                                        href="{{route ('announcement.create')}}">Comincia a vendere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/img/img_welcome/slide 2.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Vedi tutti gli annunci</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn h4"> scopri subito migliaia di annunci di antiquariato, mobili e oggetti da collezione</p>
                                    <a class="btn py-2 px-4 mt-3 animate__animated animate__fadeInUp" style="background-color: #65cbad"
                                        href="{{route('announcement.index')}}">Annunci</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
             @endif
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="/img/img_welcome/Revisore.jpeg" alt="">
                    <div class="offer-text">
                    
                        <h3 class="text-white mb-3">Lavora con noi</h3>
                        <a href="{{route('become.revisor')}}" class="btn py-2 px-4 mt-3 animate__animated animate__fadeInUp" style="background-color: #65cbad">Diventa Revisore</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="/img/img_welcome/monete.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Sconti al 70%</h6>
                        <h3 class="text-white mb-3">Offerte speciali</h3>
                        <a href="{{route('announcement.index')}}" class="btn py-2 px-4 mt-3 animate__animated animate__fadeInUp" style="background-color: #65cbad">Compra ora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check m-0 mr-3" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">Qualità certificata</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast  m-0 mr-2" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">Spedizione in 48 Ore</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt  m-0 mr-3" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">Reso entro 14 giorni</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume  m-0 mr-3" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Supporto</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="px-3 rounded-pill" style="background-color: #65cbad">Categorie</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach ($categories as $category)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a class="text-decoration-none rounded-lg d-flex cat-item img-hover" href="{{route('categories.show', compact('category'))}}">
                        <div class="overflow-hidden" style="width: 100px; height: 100px; ">
                            <img class="img-fluid" src="{{ $category['image'] }}" alt="">
                        </div>
                        <div class="d-flex flex-grow-1 align-items-center">
                            <div class="flex-fill pl-3">
                                <h6 class="text-dark">{{ $category['name'] }}</h6>
                                <small class="text-body">{{ $category->announcements->count() }} Annunci</small>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="px-3 rounded-pill" style="background-color: #65cbad">Ultimi annunci</span></h2>
                <div class="row px-xl-5">
                    @foreach ($announcements as $announcement)
                    <div class="col-lg-2 col-md-3 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i
                                            class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i
                                            class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i
                                            class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="{{route('announcement.show',  ['announcement' => $announcement->id])}}"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h4 text-decoration-none d-inline-block text-truncate text-dark" style="max-width: 80%" href="{{route('announcement.show',['announcement' => $announcement->id])}}">{{$announcement->title}}</a>
                                <br>
                                <a class="h6 text-decoration-none text-truncate text-dark"  href="">{{$announcement->category->name}}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{$announcement->price}} €</h5>
                                    <h6 class="text-muted ml-2"><del>{{$announcement->price *1.15}} €</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
    </div>

            <!-- Products End -->
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="px-3 rounded-pill" style="background-color: #65cbad">Altro da valutare </span></h2>
            <!-- Vendor Start -->
            <div class="container-fluid py-5">
                <div class="row px-xl-5">
                    <div class="col">
                        <div class="owl-carousel vendor-carousel">
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <img src="/img/img_welcome/download.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vendor End -->

</x-main>
