<x-main>


    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item slides active">
            <div class="slide-1"></div>
            <div class="hero">
              <hgroup>       
                  <h3>Come possiamo aiutarti?</h3>
                  <h4>Rarity Realm offre assistenza 24 ore su 24 e supporto, 7 giorni su 7, tutti i giorni dell'anno.</h4>
              </hgroup>
            </div>
          </div>


        </div> 
      </div>
    
        <!-- Contact Start -->
        <div class="container-fluid pt-5">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="row px-xl-5">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{route('send')}}" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="control-group">
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Inserisci il tuo nome" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="Inserisci la tua email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Messaggio" required>{{old('message')}}</textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn buttonAnimation py-2 px-4 mt-3" style="background-color: #65cbad" type="submit" id="sendMessageButton">Invia messaggio</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <h5 class="font-weight-semi-bold mb-3">Contattaci</h5>
                    <p>Se hai bisogno di assistenza, Rarity Realm offre numerose opzioni per il supporto clienti. Ottieni assistenza per i tuoi ordini, account e altro.</p>

                    <div class="d-flex flex-column">
                        <h5 class="font-weight-semi-bold mb-3">Dove siamo</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-green mr-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-envelope text-green mr-3"></i>info@rarityrealm.com</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-green mr-3"></i>+012 345 67890</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    
</x-main>