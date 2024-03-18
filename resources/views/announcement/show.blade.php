<x-main>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('welcome') }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('announcement.index') }}">Annunci</a>
                    <span class="breadcrumb-item active">{{ $announcement->title }}</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner bg-light">
                    
                        <div class="carousel-item active">
                            
                            <img class="img-fluid w-100" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) :  'https://picsum.photos/200/300'}}" alt="">
                                
                        </div>
                    
                        
                    </div>
                    
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
                
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{ $announcement->title }}</h3>
                    <h4>{{ $announcement->category->name }}</h4>


                    <h3 class="font-weight-semi-bold mb-4">{{ $announcement->price }} €</h3>
                    <h3 class="text-muted mb-4"><del>{{ $announcement->price * 1.15 }} €</del></h3>
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div>
                            <h4>Descrizione Prodotto</h4>
                            <h5>{{ $announcement->description }}</h5>
                        </div>

                    </div>
                    <div class=" container d-flex mt-5 justify-content-end">
                        <div class="d-flex align-items-end flex-column">
                            <div class="row mt-5">
                                <button class="button-71 gradient-custom-2 mb-3 text-white mt-1"> Contatta il venditore</button>
                            </div>
                            <div class="row d-flex pt-2">
                                <strong class="text-dark mr-2">Annuncio Creato da </strong>
                                <div class="d-inline-flex">
                                    <span class="text-dark px-2">{{ $announcement->user->name }} </span>
                                </div>
                            </div>
                            <div class="row d-flex pt-2">
                                <strong class="text-dark mr-2">Caricato </strong>
                                <div class="d-inline-flex">
                                    <span class="text-dark px-2">{{ $announcement->created_at->diffForHumans() }} </span>
                                </div>
                            </div>

                            <div class="row d-flex pt-1">
                                <div class="d-flex align-items-center bg-light mb-2" style="padding: 10px;">
                                    <h1 class="fa fa-check m-0 mr-3" style="color: #65cbad"></h1>
                                    <h5 class=" font-weight-semi-bold m-0" style="font-size: 100%">Qualità certificata</h5>
                                </div>
                            </div>

                            <div class="row d-flex pt-1">
                                <div class="d-flex align-items-center bg-light mb-2" style="padding: 10px;">
                                    <h1 class="fa fa-shipping-fast  m-0 mr-2" style="color: #65cbad"></h1>
                                    <h5 class="font-weight-semi-bold m-0" style="font-size: 100%">Spedizione in 48 Ore</h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">

                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>

                    </div>
                    <div class="tab-content">
                       
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Maggiori Informazioni</h4>
                            <p>Informazioni sulla vita e la storia di questo fantastico tesoro </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Vita prodotto :
                                        </li>
                                        <li class="list-group-item px-0">
                                            Materiali :
                                        </li>
                                        <li class="list-group-item px-0">
                                            Paese produzione :
                                        </li>
                                        <li class="list-group-item px-0">
                                            Altro :
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5 ">
        <div class="container-fluid pt-5 pb-3">
            <div class="col-12 border-bottom">
                <h3 class="text-center">Annunci Correlati</h3>
                <h4 class="text-center">
                    Visualizza gli annunci simili </h4>
            </div>
        <div class="row px-xl-5 justify-content-around mt-5">
            <div class="col-md-8 ">
                <div class="owl-carousel related-carousel ">
                    @forelse ($announcementCategories as $announcementCategory)
                        <div class="product-item bg-light ">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) :  'https://picsum.photos/200/300'}}" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="{{ route('announcement.show', ['announcement' => $announcementCategory->id]) }}"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate"
                                    href="">{{ $announcementCategory->title }}</a>
                                <p>{{ $announcementCategory->category->name }}</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{ $announcementCategory->price }} €</h5>
                                    <h6 class="text-muted ml-2"><del>{{ $announcementCategory->price * 1.15 }} €</del>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa text-primary mr-1">{{ $announcementCategory->created_at->diffForHumans() }}</small>
                                    
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa text-primary mr-1">Inserito da {{ $announcementCategory->user->name }}</small>
                                    
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Vuoto</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


</x-main>


