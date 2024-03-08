<div>
    <div class="row align-items-center bg-img">
        <div class="col-sm-6 col-md-5 hidden-xs hidden-sm">
            <img src="\img\logo\logo_con_sfondo.png"
                alt="" class="center-block img-responsive w-100" />
        </div>

        <div class="col-sm-12 col-xs-4 col-md-4 col-10">
            <div class="space-top">
                <h2 class="text-center text-green">Crea il tuo annuncio</h2>
                <form wire:submit.prevent="store" class="form-signin ml-5" class="form-horizontal">
                    <label for="title" class=""> Titolo Annuncio </label>
                    <input wire:model.live="title" type="text"
                        class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        {{ $message }}
                    @enderror
                    <br>

                    <label for="description" class=""> Descrizione Annuncio </label>
                    <textarea wire:model.live="description" type="text" class="form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                        {{ $message }}
                    @enderror
                    <br>

                    <label for="category">Categoria</label>
                    <select wire:model="category_id" id="category" class="form-control">
                        <option value="">Seleziona Categoria</option>
                      @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        {{ $message }}
                    @enderror
                    <br>

                    <label for="price" class=""> Prezzo </label>
                    <input wire:model.live="price" type="number"
                        class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                        {{ $message }}
                    @enderror
                    <br>
                    <button class="btn btn-lg bg-green btn-block" type="submit">
                        Crea Annuncio
                    </button>
                    <br>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                          </div>
          
                          <form>
                            <p>Please login to your account</p>
          
                            <div class="form-outline mb-4">
                              <input type="email" id="form2Example11" class="form-control"
                                placeholder="Phone number or email address" />
                              <label class="form-label" for="form2Example11">Username</label>
                            </div>
          
                            <div class="form-outline mb-4">
                              <input type="password" id="form2Example22" class="form-control" />
                              <label class="form-label" for="form2Example22">Password</label>
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                in</button>
                              <a class="text-muted" href="#!">Forgot password?</a>
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2">Don't have an account?</p>
                              <button type="button" class="btn btn-outline-danger">Create new</button>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                          <h4 class="mb-4">We are more than just a company</h4>
                          <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    </div>
</div>
