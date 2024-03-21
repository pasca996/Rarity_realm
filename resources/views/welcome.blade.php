<x-main>
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="bg-green active"></li>
                        <li class="bg-green" data-target="#header-carousel" data-slide-to="1"></li>
                        <li class="bg-green" data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/img/img_welcome/table 1-1840000_640.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Rarity
                                        Realm</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn h4">{{__('ui.headerA2')}}</p>
                                    <a class="btn buttonAnimation py-2 px-4 mt-3" style="background-color: #65cbad"
                                        href="{{ route('announcement.create') }}">{{__('ui.headerAbtn')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/img/img_welcome/mobili_01.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{__('ui.headerB1')}}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn h4">{{__('ui.headerB2')}}</p>
                                    <a class="btn buttonAnimation py-2 px-4 mt-3" style="background-color: #65cbad"
                                        href="{{ route('announcement.create') }}">{{__('ui.headerBbtn')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/img/img_welcome/slide 2.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animateanimated animatefadeInDown">{{__('ui.headerC1')}}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn h4"> {{__('ui.headerC2')}}</p>
                                    <a class="btn buttonAnimation py-2 px-4 mt-3" style="background-color: #65cbad"
                                        href="{{ route('announcement.index') }}">{{__('ui.headerCbtn')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="/img/img_welcome/Revisore.jpeg" alt="">
                    @guest
                        <div class="product-offer mb-30" style="height: 200px;">
                            <img class="img-fluid" src="/img/img_welcome/Revisore.jpeg" alt="">
                            <div class="offer-text">
                                <h3 class="text-white mb-3">{{__('ui.workWithUs1')}}</h3>
                                <a href="{{ route('become.revisor') }}" class="btn buttonAnimation py-2 px-4 mt-3"
                                    style="background-color: #65cbad">{{__('ui.workWithUs2')}}</a>
                            </div>
                        </div>
                    @endguest
                    @auth
                        @if (Auth::user()->is_revisor)
                            <div class="product-offer mb-30" style="height: 200px;">
                                <img class="img-fluid" src="/img/img_welcome/Revisore.jpeg" alt="">
                                <div class="offer-text">
                                    <h3 class="text-white mb-3">{{__('ui.workWithUs3')}}</h3>
                                    <a href="{{ route('revisor.index') }}" class="btn buttonAnimation py-2 px-4 mt-3"
                                        style="background-color: #65cbad">{{__('ui.workWithUs4')}}</a>
                                </div>
                            </div>
                        @else
                            <div class="product-offer mb-30" style="height: 200px;">
                                <img class="img-fluid" src="/img/img_welcome/Revisore.jpeg" alt="">
                                <div class="offer-text">
                                    <h3 class="text-white mb-3">{{__('ui.workWithUs1')}}</h3>
                                    <a href="{{ route('become.revisor') }}" class="btn buttonAnimation py-2 px-4 mt-3"
                                        style="background-color: #65cbad">{{__('ui.workWithUs2')}}</a>
                                </div>
                            </div>
                        @endif
                    @endauth


                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="/img/img_welcome/monete.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">{{__('ui.specialOffer3')}}</h6>
                        <h3 class="text-white mb-3">{{__('ui.specialOffer1')}}</h3>
                        <a href="{{ route('announcement.index') }}" class="btn buttonAnimation py-2 px-4 mt-3"
                            style="background-color: #65cbad">{{__('ui.specialOffer2')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    @if (session('message'))
        <div class="container alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check m-0 mr-3" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">{{__('ui.service1')}}</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast  m-0 mr-2" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">{{__('ui.service2')}}</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt  m-0 mr-3" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">{{__('ui.service3')}}</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume  m-0 mr-3" style="color: #65cbad"></h1>
                    <h5 class="font-weight-semi-bold m-0">{{__('ui.service4')}}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
    <header>
        <div class="jumbotron jumbotron-fluid"
            style=" background: linear-gradient(rgba(0, 0, 0, 0.333), rgba(0, 0, 0, 0.525)); background-color: #8260c25b">
            <div class="container">
                <p class="lead font-italic text-white">La collezione nasce dal bisogno di trasformare lo scorrere della
                    propria esistenza in una serie di oggetti salvati dalla dispersione, o in una serie di righe
                    scritte, cristallizzate, fuori dal flusso continuo dei pensieri.</p>
                <p class="lead font-italic text-white">Italo Calvino, Collezione di sabbia, 1984</p>
            </div>
        </div>
    </header>


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="col-12 border-bottom">
            <h3 class="text-center">{{__('ui.cat1')}}</h3>
            <h4 class="text-center">{{__('ui.cat2')}}
                 </h4>
        </div>
        <div class="row px-xl-5 pb-3 mt-5">
            @foreach ($categories as $category)
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a class="text-decoration-none rounded-lg d-flex cat-item img-hover"
                        href="{{ route('categories.show', compact('category')) }}">
                        <div class="overflow-hidden" style="width: 125px; height: 125px; ">
                            <img class="img-fluid" src="{{ $category['image'] }}" alt="">
                        </div>
                        <div class="d-flex flex-grow-1 align-items-center">
                            <div class="flex-fill pl-3">
                                <h6 class="text-dark">{{ $category['name'] }}</h6>
                                <small
                                    class="text-body">{{ $category->announcements->where('is_accepted', true)->count() }}
                                    {{__('ui.cat3')}}</small>
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
        <div class="col-12 border-bottom">
            <h3 class="text-center">{{__('ui.product1')}}</h3>
            <h4 class="text-center">
                {{__('ui.product2')}}</h4>
        </div>
        <div class="row px-xl-5">
            @foreach ($announcements as $announcement)
                <div class="col-lg-2 col-md-3 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300,300) :  'https://picsum.photos/300/300'}}" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square"
                                    href="{{ route('announcement.show', ['announcement' => $announcement->id]) }}"><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h4 text-decoration-none d-inline-block text-truncate text-dark"
                                style="max-width: 80%"
                                href="{{ route('announcement.show', ['announcement' => $announcement->id]) }}">{{ $announcement->title }}</a>
                            <br>
                            <a class="h6 text-decoration-none text-truncate text-dark"
                                href="">{{ $announcement->category->name }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>{{ $announcement->price }} €</h5>
                                <h6 class="text-muted ml-2"><del>{{ $announcement->price * 1.15 }} €</del></h6>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Products End -->
    <div class="col-12 border-bottom">
        <h3 class="text-center">{{__('ui.feedback1')}}</h3>
        <h4 class="text-center">
            {{__('ui.feedback2')}}</h4>
    </div>
    <!-- Vendor Start -->
        <!-- TESTIMONIALS -->
<section class="testimonials mt-5">
	<div class="container-fluid">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="rounded-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial5.jpg" alt="">
                <p>“Rarity Realm è la mia piattaforma preferita nonché quella che offre più protezioni,è presente un ottimo servizio clienti e procedure chiare.”</p>
              </div>
              <div class="testimonial-name">EMILIANO AQUILANI</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="rounded-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial1.jpg" alt="">
                <p>“Per quel che riguarda i miei acquisti fatti su Rarity Realm non ho mai avuto problemi, i venditori rispondono alle mie domande sui prodotti e il sito garantisce la sicurezza nelle transazioni.”</p>
              </div>
              <div class="testimonial-name">LUANA TOSCANO</div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="rounded-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial2.jpg" alt="">
                <p>“Excellent site and very reliable, I can only recommend it. Since I have been shopping on Rarity Realm, I have always found extreme seriousness and correctness.”</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="rounded-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>“Acquisto da anni su Rarity Realm e ho trovato ottimi venditori. Ho avuto anche assistenza e dei rimborsi in alcuni casi e pertanto lo consiglio a tutti.”</p>
              </div>
              <div class="testimonial-name">CLAUDIA TODISCO</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="rounded-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial4.jpg" alt="">
                <p>“It is the first time I have purchased on this site and, for the items I purchased, I must say that I was very satisfied with both the price and the fast shipping. Thanks until next purchase.”</p>
              </div>
              <div class="testimonial-name">VANESSA LOTON</div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
                <div class="shadow-effect">
                  <img class="rounded-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial4.jpg" alt="">
                  <p>“It is the first time I have purchased on this site and, for the items I purchased, I must say that I was very satisfied with both the price and the fast shipping. Thanks until next purchase.”</p>
                </div>
                <div class="testimonial-name">PASCARO ANDRELLA</div>
              </div>
              <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Vendor End -->
</x-main>
