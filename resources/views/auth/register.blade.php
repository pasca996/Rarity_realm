<x-main>
  <section class="h-100" style="background-color: #eeeeee63;">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4 text-center">{{__('ui.register')}} Rarity Realm</h4>
                  <p class="text-md mb-5">{{__('ui.register1')}}</p>
                  <p class="text-md mb-3"><i class="fa fa-eye" aria-hidden="true"></i> {{__('ui.register2')}}</p>
                  <p class="text-md mb-3"><i class="fa fa-shopping-bag" aria-hidden="true"></i> {{__('ui.register3')}}</p>
                  <p class="text-md mb-3"><i class="fa fa-globe" aria-hidden="true"></i> {{__('ui.register4')}}</p>
                  
                  

                </div>
              </div>
              <div class="col-lg-6 bg-white rounded-lg">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <img src="/img/logo/logo_senza_sfondo.png"style="width: 300px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">{{__('ui.register5')}}</h4>
                  </div>
                  <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="move-form-group">
                      <input type="text" id="name" name="name" placeholder=" " required class="move-input">
                      <label for="name" class="move-label">{{__('ui.register6')}}</label>
                    </div>
                    <div class="move-form-group">
                      <input type="text" id="email" name="email" placeholder=" " required class="move-input">
                      <label for="email" class="move-label">Email</label>
                    </div>
                    <div class="move-form-group">
                      <input type="password" id="password" name="password" placeholder=" " required class="move-input">
                      <label for="password" class="move-label">Password</label>
                    </div>

                    <div class="move-form-group">
                      <input type="password" id="password" name="password_confirmation"" placeholder=" " required class="move-input">
                      <label for="password" class="move-label">{{__('ui.register7')}}</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn searchAnimation btn-block fa-lg gradient-custom-2 mb-3 text-white" type="submit">Registrati</button> 
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">{{__('ui.register8')}}</p>
                      <a href="{{route('login')}}" class="btn searchAnimation fa-lg gradient-custom-2 mb-3 ml-3 px-4 text-white">{{__('ui.register9')}}</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-main>