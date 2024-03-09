
  <x-main>
    <section class="h-100 gradient-form" style="background-color: #eee;">
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
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
    
                    <div class="text-center">
                      <img src="/img/logo/logo_senza_sfondo.png"style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">Accedi a Rarity Realm</h4>
                    </div>
    
                    <form action="{{route('login')}}" method="POST">
                      @csrf
                      <div class="move-form-group">
                        <input type="text" id="username" name="username" placeholder=" " required class="move-input">
                        <label for="username" class="move-label">Nome Utente</label>
                      </div>
                      
                      <div class="move-form-group">
                        <input type="password" id="password" name="password" placeholder=" " required class="move-input">
                        <label for="password" class="move-label">Password</label>
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                      </div>
    
                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-block fa-lg gradient-custom-2 mb-3 text-white" type="submit">Accedi</button>
                        
                      </div>
    
                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Non hai un account?</p>
                        
                        <a href="{{route('register')}}" class="btn fa-lg gradient-custom-2 mb-3 ml-3 px-4 text-white">Registrati</a>
                      </div>
    
                    </form>
    
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">Perchè noi?</h4>
                    <p class="small mb-0">Ci sono milioni di annunci ed la sicurezza del nostro sito è il massimo</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </x-main>
