<div>
    
<div class="container-fluid">
        <h2 class="text-center"></h2>
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class=" text-uppercase text-center my-3"><span class="bg-green rounded-lg px-2 py-2">Filtro prezzo</span></h5>
                <div class="bg-light p-4 mb-30 mt-5">
                    <form>
                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="0-9999999" class="custom-control-input" id="price-all" name="price-option">
                            <label class="custom-control-label" for="price-all">Tutti i prezzi</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="0-50" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">$0 - $50</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="50-100" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">$50 - $100</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="100-200" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">$100 - $200</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="200-500" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">$200 - $500</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between">
                            <input type="radio" wire:model.live="prices" value="500-9999999" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">+$500</label>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Ordina</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Dal più recente</a>
                                        <a class="dropdown-item">Dal più vecchio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @forelse ($announcements as $announcement)
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://picsum.photos/200" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="{{route('announcement.show',  ['announcement' => $announcement->id])}}">{{$announcement->title}}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{$announcement->price}} €</h5><h6 class="text-muted ml-2"><del>{{$announcement->price *1.15}} €</del></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div>
                        <p>Non ci sono annunci presenti!</p>
                        <p>Pubblicane uno!</p>
                    </div>
                    @endforelse
                    
                    <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>

</div>
