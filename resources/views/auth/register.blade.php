<x-main>
  <section class="vh-100 gradient-custom">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
<form action="{{route('register')}}" method="POST">
    @csrf
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-uppercase">Crea un account</h2>
                    <div class="form-outline form-white mb-4">
                        <input type="text" name="name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1cg">Nome</label>
                      </div>
                    <div class="form-outline form-white mb-4">
                      <input type="email" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password" class="form-control form-control-lg" />
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX">Conferma Password</label>
                      </div>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrati</button>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
                  </div>
                  <div>
                    <p class="mb-0">Hai già un account? <a href="{{route('login')}}" class="text-white-50 fw-bold">Accedi</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      </section>

</x-main>