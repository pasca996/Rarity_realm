
  <x-main>
    <section class="h-100 " style="background-color: #eeeeee6b;">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
          <div class="col-xl-10 ">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6 bg-white rounded-lg">
                  <div class="card-body p-md-5 mx-md-4 ">
    
                    <div class="text-center">
                      <img src="/img/logo/logo_senza_sfondo.png"style="width: 300px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">{{__('ui.login')}} Rarity Realm</h4>
                    </div>
    
                    <form action="{{route('login')}}" method="POST">
                      @csrf
                      <div class="move-form-group">
                        <input type="text" id="email" name="email" placeholder=" " required class="move-input">
                        <label for="email" class="move-label ">Email</label>
                      </div>
                      
                      <div class="move-form-group">
                        <input type="password" id="password" name="password" placeholder=" " required class="move-input">
                        <label for="password" class="move-label">Password</label>
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">{{__('ui.login2')}}</label>
                      </div>
    
                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn searchAnimation shadow-btn btn-block fa-lg gradient-custom-2 mb-3 text-white" type="submit">{{__('ui.loginx')}}</button>
                        
                      </div>
    
                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">{{__('ui.login3')}}</p>
                        
                        <a href="{{route('register')}}" class="btn shadow-btn searchAnimation fa-lg gradient-custom-2 mb-3 ml-3 px-4 text-white">{{__('ui.login4')}}</a>
                      </div>
    
                    </form>
    
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-5 text-center">{{__('ui.login5')}}</h4>
                    <p class="text-md mb-3">{{__('ui.login6')}}</p>
                    <p class="text-md mb-3">{{__('ui.login7')}}</p>
                    <p class="text-md mb-3"> {{__('ui.login8')}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </x-main>
