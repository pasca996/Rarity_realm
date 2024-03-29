<div>

    <div class="container-fluid">
        <h2 class="text-center">{{ __('ui.ann36') }}</h2>
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class=" text-uppercase text-center my-3"><span
                        class="bg-green rounded-lg px-2 py-2">{{ __('ui.ann23') }}</span></h5>
                <div class="bg-light p-4 mb-30 mt-5 rounded-lg shadow-crd ">
                    <form>
                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="0-9999999" class="custom-control-input"
                                id="price-all" name="price-option">
                            <label class="custom-control-label" for="price-all">{{ __('ui.ann24') }}</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="0-100" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">€0 - €100</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="100-250" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">€100 - €250</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="250-500" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">€250 - €500</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="500-1000" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">€500 - €1000</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="1000-2000" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">€1000 - €2000</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" wire:model.live="prices" value="2000-5000" class="custom-control-input" id="price-6">
                            <label class="custom-control-label" for="price-6">€2000 - €5000</label>
                        </div>

                        <div class="custom-control custom-radio d-flex align-items-center justify-content-between">
                            <input type="radio" wire:model.live="prices" value="5000-9999999" class="custom-control-input" id="price-7">
                            <label class="custom-control-label" for="price-7">+€5000</label>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8 mt-5">
                <div class="row pb-3">
                    @forelse ($annunci as $announcement)
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-1 ">
                            <div class="product-item bg-light mb-4 shadow-crd">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100"
                                        src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300, 300) : '\img\logo\logo_con_sfondo_300.png' }}"
                                        alt="">
                                    <div class="product-action">

                                        <a class="btn btn-outline-dark btn-square"
                                            href="{{ route('announcement.show', ['announcement' => $announcement->id]) }}"><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a style="max-width: 80%;" class="h6 d-inline-block text-decoration-none text-truncate text-dark"
                                        href="{{ route('announcement.show', ['announcement' => $announcement->id]) }}">{{ $announcement->title }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
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
                    <div class="col-12">
                        <nav>
                          <ul class=" justify-content-center">
                            {{ $annunci->links() }}
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>

</div>
