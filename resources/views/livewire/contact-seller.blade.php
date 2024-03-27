<div>
    @teleport('body')
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Contatta venditore</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <form wire:submit.prevent="sendMail">
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <h6 class="text-right">{{$username}}</h6>
                                    <h4>{{$announcement}}</h4>
                                    <h5>{{$price}}€</h5>
                                    <label for="title">Scrivi un messaggio</label>
                                    <textarea class="form-control" wire:model="description" type="text"></textarea>
                                    @error('description')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                        
                                    <label for="category">Perchè stai contattando il venditore?</label>
                                    <select wire:model="argument" id="" class="form-control">
                                            <option value="">Seleziona argomento</option>
                                            <option value="Dettagli sull'oggetto">Dettagli sull'oggetto</option>
                                            <option value="Spedizione">Spedizione</option>
                                            <option value="Restituzione">Restituzione</option>
                                            <option value="Prezzo">Prezzo</option>
                                            <option value="Altro">Altro</option>
                                    </select>
                                    @error('category_id')
                                        {{ $message }}
                                    @enderror
                                        @if (session('success'))
                                            <div class="container alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn searchAnimation mt-2 bg-green me-md-2">Invia</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    <div class="modal-footer">
                      <button type="button" class="btn searchAnimation btn-secondary" data-dismiss="modal">{{__('ui.ann29')}}</button>
                    </div>
                  </div>
                </div>
        </div>
    @endteleport
    </div>