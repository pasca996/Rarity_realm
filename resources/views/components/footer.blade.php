    <!-- Footer Start -->
    <div class="container-fluid navbar-light mb-30 mt-5 pt-5" style="background-color: #f2f6fa">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Contact us</h5>
                <p class="mb-4">{{__('ui.footer')}}</p>
                <p class="mb-2"><i class="fa fa-envelope  mr-3" style="color: #65cbad"></i>info@rarityrealm.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt mr-3" style="color: #65cbad"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{route('welcome')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="{{route('announcement.index')}}"><i class="fa fa-angle-right mr-2"></i>{{__('ui.footer1')}}</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>{{__('ui.footer2')}}</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{route('welcome')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="{{route('page.profile')}}"><i class="fa fa-angle-right mr-2"></i>{{__('ui.footer3')}}</a>
                            <a class="text-secondary mb-2" href="{{route ('announcement.create')}}"><i class="fa fa-angle-right mr-2"></i>{{__('ui.footer4')}}</a>
                            
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Cosa ne pensi di noi?</h5>
                        <p>{{__('ui.footer5')}}</p>
                        
                            
                                    <a href="{{ route('contact') }}"><button class="btn searchAnimation" style="background-color: #65cbad">Contattaci</button></a>
                               
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn  btn-square mr-2" href="https://twitter.com/?lang=it"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn  btn-square mr-2" href="https://www.facebook.com/?locale=it_IT"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn  btn-square mr-2" href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn  btn-square"  href="https://www.instagram.com/"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="/img/payments.png" alt="">
            </div>
        </div> --}}
    </div>
    <!-- Footer End -->
