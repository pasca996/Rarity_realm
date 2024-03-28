<div>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 " wire:poll>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ $user->name }}</span><span
                        class="text-black-50">{{ $user->email }}</span><span> </span>
                </div>
            </div>
            <div class="col-md-5  shadow-prf">
                <div class="p-3 py-5">
                    @if (session('status'))
                                <div class="alert alert-success  ">
                                    {{ session('status') }}
                                </div>
                            @endif
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        
                        <h4 class="text-right">{{__('ui.profile')}}</h4>
                    </div>
                        <form class="row mt-2" wire:submit.prevent="store">
                            <div class="container">
                                <div class="col-md-12 mb-2 align-items-center">
                                    <label class="labels ml-3">{{__('ui.profile1')}}
                                    </label>
                                    <div class="col-md-12 d-flex">
                                        <input @disabled($nameDisabled) type="text"
                                            class="form-control move-input shadow-btn" placeholder="{{__('ui.profile2')}}"
                                            wire:model="name" value="">
                                     
                                        <button class="btn searchAnimation shadow-btn fa-lg bg-green text-white mx-3"
                                            wire:click.prevent="toggleName">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="col-md-12 mb-2 align-items-center">
                                    <label class="labels ml-3">{{__('ui.profile3')}}
                                    </label>
                                    <div class="col-md-12 d-flex">
                                        <input @disabled($ageDisabled) type="text"
                                            class="form-control move-input shadow-btn" placeholder="{{__('ui.profile4')}}"
                                            wire:model="age" value="">
                                        <button class="btn searchAnimation shadow-btn fa-lg bg-green text-white mx-3"
                                            wire:click.prevent="toggleAge">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="col-md-12 mb-2 align-items-center">
                                    <label class="labels ml-3">Gender
                                    </label>
                                    <div class="col-md-12 d-flex">
                                        <select @disabled($genderDisabled) type="text" class="form-control shadow-btn move-input"
                                        wire:model="gender">
                                            <option value="" hidden>{{__('ui.profile5')}}</option>
                                            <option value="male">{{__('ui.profile6')}}</option>
                                            <option value="female">{{__('ui.profile7')}}</option>
                                            <option value="other">{{__('ui.profile8')}}</option>
                                        </select>
                                     
                                        <button class="btn searchAnimation shadow-btn fa-lg bg-green text-white mx-3"
                                            wire:click.prevent="toggleGender">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="col-md-12 mb-2 align-items-center">
                                    <label class="labels ml-3">Hobby
                                    </label>
                                    <div class="col-md-12 d-flex">
                                        <input @disabled($hobbiesDisabled) type="text"
                                            class="form-control move-input shadow-btn" placeholder="{{__('ui.profile9')}}"
                                            wire:model="hobbies" value=""> 
                                        <button class="btn searchAnimation shadow-btn fa-lg bg-green text-white mx-3"
                                            wire:click.prevent="toggleHobbies">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="col-md-12 mb-2 align-items-center">
                                    <label class="labels ml-3">{{__('ui.profile10')}}
                                    </label>
                                    <div class="col-md-12 d-flex">
                                        <input @disabled($jobDisabled) type="text"
                                            class="form-control move-input shadow-btn" placeholder="{{__('ui.profile11')}}"
                                            wire:model="job" value="">
                                     
                                        <button class="btn searchAnimation shadow-btn fa-lg bg-green text-white mx-3"
                                            wire:click.prevent="toggleJob">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                <button class="btn button-71 fa-lg gradient-custom-2 shadow-btn mb-3 text-white mt-1" type="submit">{{__('ui.profile12')}}</button>
                                <div>
                                    <a wire:loading wire:target="store" class="buttonNone" href="#"><i
                                            class="fas fa-spinner"></i></a>
                                </div>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
