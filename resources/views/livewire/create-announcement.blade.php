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
                    <div class="mb-3">
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror"/>

                        @error('temporary_images.*')
                        {{ $message }}
                        @enderror
                    </div>
                    
                    <br>
                    @if(!empty($images))
                    <div class="row mb-5">
                        <div class="col-12">
                            <p> Anteprima foto:</p>
                            <div class="row border border-4 border-info rounded shadow py-4">
                                @foreach ($images as $key => $image)
                               
                                <div class="col my-5">
                                    <img class="img-fluid w-100" src="{{$image->temporaryUrl()}}" alt="">
                                    <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella foto</button>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    @endif
                    <button class="button-71 gradient-custom-2 btn-lg btn-block" type="submit">
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
        
        
    </div>
</div>
