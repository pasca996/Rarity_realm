<x-main>
  <h1 class="text-center mb-5" style="color: #000000 !important;">{{$announcement_to_check ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
  @if ($announcement_to_check)
  <div class="container-fluid me-5">
      <div class="card border-0 rounded-0 shadow">
          <div class="card-body mt-3 mb-3">
                <div class="row d-flex justify-content-center">
                    @foreach ($announcement_to_check->images as $image)
                      <div class="col-md-4">
                          <div class="d-flex flex-column align-items-center mb-3">
                              <img class="img-fluid" src="{{$image->getUrl(300,300)}}" alt="">
                              <div class="d-flex">
                                  <p>Adulti: <span class="{{$image->adult}} mr-1"></span></p>
                                  <p>Satira: <span class="{{$image->spoof}} mr-1"></span></p>
                                  <p>Medicina: <span class="{{$image->medical}} mr-1"></span></p>
                                  <p>Violenza: <span class="{{$image->violence}} mr-1"></span></p>
                                  <p>Razzismo: <span class="{{$image->racy}} mr-1"></span></p>
                              </div>
                          </div>
                      </div>
                    @endforeach
                        <div class="col-md-12 text-center">
                          <h4 class="card-title">{{$announcement_to_check->title}}</h4>
                          <h5>{{$announcement_to_check->price}}€</h5>
                          <p>{{__('ui.revisor22')}}: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                        </div>
                </div>
          </div>
              <div class="row justify-content-center align-items-center text-center g-0 col-xs-12 col-md-12">
                    <div class="">
                        <form action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn searchAnimation m-3" style="background-color: #65cbad">{{__('ui.revisor23')}}</button>
                        </form>
                    </div>
                    <div class="">
                        <form action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn searchAnimation m-3 bg-danger">{{__('ui.revisor24')}}</button>
                        </form>
                    </div>
              </div>
        </div>
  </div>
  @endif

            <img class="img-fluid w-100" src="/img/img_welcome/quality.png" alt="">
    <section class="p-3 p-lg-5 d-flex flex-column" style="width: 100%;">
        <div class="my-auto">
          <h2 class="mb-5">{{__('ui.revisor')}}</h2>
          <div id="accordion" role="tablist" aria-multiselectable="true">
  
            <!-- Accordion Item 1 -->
            <div class="card" style="border: none !important; border-bottom: 2px solid rgba(172, 255, 157, 0.3) !important;">
              <div class="card-header" role="tab" id="accordionHeadingOne" style="background-color: rgb(0 0 0 / 0%) !important;">
                <div class="mb-0 row">
                  <div class="col-12 no-padding accordion-head">
                    <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyOne" aria-expanded="false" aria-controls="accordionBodyOne"
                      class="collapsed ">
                      <i class="fa fa-angle-down text-green" aria-hidden="true" style="font-size: 2.5em; float: right;"></i>
                      <h3  style="color: #000000 !important;">1. {{__('ui.revisor1')}}</h3>
                    </a>
                  </div>
                </div>
              </div>
  
              <div id="accordionBodyOne" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false">
                <div class="card-block col-12">
                  <p>{{__('ui.revisor2')}}</p>
                  <p>{{__('ui.revisor3')}}</p>
                </div>
              </div>
            </div>
            <div class="card" style="border: none !important; border-bottom: 2px solid rgba(172, 255, 157, 0.3)  !important;">
              <div class="card-header" role="tab" id="accordionHeadingOne" style="background-color: rgb(0 0 0 / 0%) !important;">
                <div class="mb-0 row">
                  <div class="col-12 no-padding accordion-head">
                    <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyTwo" aria-expanded="false" aria-controls="accordionBodyTwo"
                      class="collapsed ">
                      <i class="fa fa-angle-down text-green" aria-hidden="true" style="font-size: 2.5em; float: right"></i>
                      <h3 style="color: #000000 !important;">2. {{__('ui.revisor4')}}</h3>
                    </a>
                  </div>
                </div>
              </div>
  
              <div id="accordionBodyTwo" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingTwo" aria-expanded="false">
                <div class="card-block col-12">
                  <p>{{__('ui.revisor5')}}</p>
                  <ul>
                    <li>{{__('ui.revisor6')}}</li>
                    <li>{{__('ui.revisor7')}}</li>
                  </ul>
                    
                </div>
              </div>
            </div>
            <div class="card" style="border: none !important; border-bottom: 2px solid rgba(172, 255, 157, 0.3) !important;">
              <div class="card-header" role="tab" id="accordionHeadingOne" style="background-color: rgb(0 0 0 / 0%) !important;">
                <div class="mb-0 row">
                  <div class="col-12 no-padding accordion-head">
                    <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyThree" aria-expanded="false" aria-controls="accordionBodyThree"
                      class="collapsed ">
                      <i class="fa fa-angle-down text-green" aria-hidden="true" style="font-size: 2.5em; float: right;"></i>
                      <h3 style="color: #000000 !important;">3. {{__('ui.revisor25')}}</h3>
                    </a>
                  </div>
                </div>
              </div>
  
              <div id="accordionBodyThree" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingThree" aria-expanded="false">
                <div class="card-block col-12">
                    <p>{{__('ui.revisor8')}}</p>
                    <ul>
                      <li>{{__('ui.revisor9')}}</li>
                      <li>{{__('ui.revisor10')}}</li>
                      <li>{{__('ui.revisor11')}}</li>
                      <li>{{__('ui.revisor12')}}</li>
                      <li>{{__('ui.revisor13')}}</li>
                    </ul>
                
                </div>
              </div>
            </div>
            <div class="card" style="border: none !important; border-bottom: 2px solid rgba(172, 255, 157, 0.3) !important;">
              <div class="card-header" role="tab" id="accordionHeadingOne" style="background-color: rgb(0 0 0 / 0%) !important;">
                <div class="mb-0 row">
                  <div class="col-12 no-padding accordion-head">
                    <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyFour" aria-expanded="false" aria-controls="accordionBodyFour"
                      class="collapsed">
                      <i class="fa fa-angle-down text-green" aria-hidden="true" style="font-size: 2.5em; float: right;"></i>
                      <h3 style="color: #000000 !important;">4. {{__('ui.revisor14')}}</h3>
                    </a>
                  </div>
                </div>
              </div>
  
              <div id="accordionBodyFour" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingFour" aria-expanded="false">
                <div class="card-block col-12">
                  <p>{{__('ui.revisor15')}}</p>
                  <p>{{__('ui.revisor16')}}</p>
                  <br>
                  <p>{{__('ui.revisor17')}}</p>
                  <ul>
                    <li>{{__('ui.revisor18')}}</li>
                    <li>{{__('ui.revisor19')}}</li>
                    <li>{{__('ui.revisor20')}}</li>
                    <li>{{__('ui.revisor21')}}</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

        
</x-main>