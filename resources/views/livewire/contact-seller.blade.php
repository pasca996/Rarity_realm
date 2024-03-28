<div>
    @teleport('body')
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Contatta {{$username}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <form wire:submit.prevent="sendMail">
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    
                                    <h4>{{$announcement}}</h4>
                                    <h5>{{$price}}€</h5>
                                    <label for="title">Scrivi un messaggio</label>
                                    <textarea class="form-control" wire:model="description" type="text"></textarea>
                                    @error('description')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <label for="category">Seleziona argomento</label>
                                    <select wire:model="argument" id="" class="form-control">
                                            <option value="Dettagli sull'oggetto">Dettagli sull'oggetto</option>
                                            <option value="Spedizione">Spedizione</option>
                                            <option value="Restituzione">Restituzione</option>
                                            <option value="Prezzo">Prezzo</option>
                                            <option value="Altro">Altro</option>
                                    </select>
                                    @error('category_id')
                                        {{ $message }}
                                    @enderror
                                        @if (session('message'))
                                            <div class="mt-3 container alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <div class="modal-footer">
                                            <button type="submit" class="btn searchAnimation bg-green">Invia</button>
                                            <button type="button" class="btn searchAnimation btn-secondary" data-dismiss="modal">{{__('ui.ann29')}}</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    
                  </div>
                </div>
        </div>
    @endteleport
    </div>