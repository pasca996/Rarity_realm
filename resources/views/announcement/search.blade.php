<x-main>
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
                            <input type="radio" name="priceFilter" value="0-9999999" class="custom-control-input" id="price-all" name="price-option">
                            <label class="custom-control-label" for="price-all">Tutti i prezzi</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" name="priceFilter" value="0-50" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">€0 - €50</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" name="priceFilter" value="50-100" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">€50 - €100</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" name="priceFilter" value="100-200" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">€100 - €200</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" name="priceFilter" value="200-500" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">€200 - €500</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between">
                            <input type="radio" name="priceFilter" value="500-9999999" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">+€500</label>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    @forelse ($announcements as $announcement)
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100"
                                        src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300, 300) : 'https://picsum.photos/300/300' }}"
                                        alt="">
                                    <div class="product-action">

                                        <a class="btn btn-outline-dark btn-square"
                                            href="{{ route('announcement.show', ['announcement' => $announcement->id]) }}"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href="{{ route('announcement.show', ['announcement' => $announcement->id]) }}">{{ $announcement->title }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2 prezzo">
                                        <h5>{{ $announcement->price }} €</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div>
                            <p>{{ __('ui.ann25') }}</p>
                            <p>{{ __('ui.ann26') }}!</p>
                        </div>
                    @endforelse
            </div>
        </div>
            <!-- Shop Product End -->
        </div>
</x-main>