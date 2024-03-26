<div>
    <div class="row align-items-center bg-img">
        <div class="col-sm-6 col-md-5 hidden-xs hidden-sm">
            <img src="\img\logo\logo_con_sfondo.png" alt="" class="center-block img-responsive w-100" />
        </div>

        <div class="col-sm-12 col-xs-4 col-md-4 col-10 ">
            <div class="space-top">
                <h2 class="text-center text-green my-4">{{ __('ui.ann14') }}</h2>
                <form wire:submit.prevent="store" class="form-signin ml-5" class="form-horizontal">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="move-form-group">
                        <input wire:model.live="title" placeholder=" " type="text"
                            class="move-input @error('title') is-invalid @enderror">
                        <label for="title" class="move-label"> {{ __('ui.ann15') }} </label>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                    <br>
                    <div class="move-form-group">
                    
                    <textarea wire:model.live="description" placeholder=" " type="text"
                        class="move-input @error('description') is-invalid @enderror"></textarea>
                        <label for="description" class="move-label"> {{ __('ui.ann16') }} </label>
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>
                    <br>
                    <div></div>
                    <label for="category">{{ __('ui.ann17') }}</label>
                    <select wire:model="category_id" id="category" class="border-0 ">
                        <option value="">{{ __('ui.ann18') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        {{ $message }}
                    @enderror
                    <br>

                    <label for="price" class="">{{ __('ui.ann19') }} </label>
                    <input wire:model.live="price" type="number"
                        class="form-control shadow-btn @error('price') is-invalid @enderror">
                    @error('price')
                        {{ $message }}
                    @enderror
                    <br>

                    <div class="custom-file mb-3">
                        <input wire:model="temporary_images" type="file" class="custom-file-input" id="customFile"
                            name="images" multiple>
                        <label class="custom-file-label shadow-btn" for="customFile">Scegli file</label>
                        @error('temporary_images.*')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <br>
                    @if (!empty($images))
                        <div class="row mb-5">
                            <div class="col-12">
                                <p> {{ __('ui.ann20') }}:</p>
                                <div class="row border-4 border-info rounded shadow py-4">
                                    @foreach ($images as $key => $image)
                                        <div class="col my-5">
                                            <img class="img-fluid w-100" src="{{ $image->temporaryUrl() }}"
                                                alt="">
                                            <button type="button"
                                                class="btn shadow-btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                wire:click="removeImage({{ $key }})">{{ __('ui.ann21') }}</button>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endif
                    <button class="button-71 gradient-custom-2 btn-lg btn-block" type="submit">
                        {{ __('ui.ann22') }}
                    </button>
                    <br>

                </form>
            </div>
        </div>


    </div>
</div>
