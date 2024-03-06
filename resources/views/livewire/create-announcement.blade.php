<div>
    <div class="">
        <div class="row align-items-center">
          
          <div class="col-sm-6 col-md-5 hidden-xs hidden-sm">   
             <img src="https://raw.githubusercontent.com/rexxars/react-hexagon/master/logo/react-hexagon.png" alt="" class="center-block img-responsive" />
            </div>
          
            <div class="col-md-1 hidden-xs hidden-sm">   
              <div class="border-login"></div>
            </div>
          
          
            <div class="col-sm-12 col-xs-12 col-md-4">            
               <div class="space-top">
                 
                 
                 <h3 class="text-center">Crea il tuo annuncio</h3>
                
              <form wire:submit.prevent="store" class="form-signin" class="form-horizontal">
                
                <label for="title" class=""> Titolo Annuncio </label>                                               
                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                  {{$message}}                  
                @enderror
                <label for="description" class=""> Descrizione Annuncio </label>                                  
                <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description')
                  {{$message}}                  
                @enderror
                <label for="price" class=""> Prezzo </label>                                              
                <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                  {{$message}}                  
                @enderror
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Crea Annuncio
                </button>   
                
              
                       
                 
                    </form>
                </div>
   
</div>
