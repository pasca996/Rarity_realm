<div>
@teleport('body')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form wire:submit.prevent="store">
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <label for="title">{{__('ui.ann27')}}</label>
                                <input class="form-control" wire:model.live="title" type="text">
                                @error('title')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <label for="title">{{__('ui.ann1')}}</label>
                                <textarea class="form-control" wire:model.live="description" type="text"></textarea>
                                @error('description')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <label for="price">{{__('ui.ann19')}}</label>
                                <input class="form-control" wire:model.live="price" type="number">
                                @error('price')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    
                                <label for="category">{{__('ui.navbar2')}}</label>
                                <select wire:model.live="category_id" id="category" class="form-control">
                                        {{-- <option value="">{{$category}}</option> --}}
                                @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    {{ $message }}
                                @enderror
                                    @if (session('success'))
                                        <div class="container alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="modal-footer">
                                        <button type="button" class="btn searchAnimation btn-secondary" data-dismiss="modal">{{__('ui.ann29')}}</button>
                                        <button type="submit" class="btn searchAnimation bg-green">{{__('ui.ann28')}}</button>
                                    </div>
                            </div>
                        </div>
                    </form>
               
              </div>
            </div>
    </div>
@endteleport
</div>