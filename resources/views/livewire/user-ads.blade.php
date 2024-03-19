<div>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

        <div class="container mt-5">
            <div class="align-middle gap-2 d-flex justify-content-between">
                <h3>{{__('ui.ann30')}}</h3>
                <form class="d-flex" action="{{ route('announcement.search') }}" method="GET">
                    <input class="form-control me-2" name="searched" type="search" placeholder="{{__('ui.navbar6')}}"
                    aria-label="Search">
                </form>
                <a href="{{ route('announcement.create') }}" class="btn searchAnimation bg-green me-md-2">
                    {{__('ui.ann14')}}
                </a>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('ui.ann32')}}</th>
                        <th scope="col">{{__('ui.ann31')}}</th>
                        <th scope="col">{{__('ui.ann19')}}</th>
                        <th scope="col">{{__('ui.ann17')}}</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody wire:poll.15ms wire:target="delete">
                    @foreach ($announcements as $announcement)
                        <tr>
                            <th scope="row">#{{ $announcement->id }}</th>
                            <td>
                                <img class="card-img-top" style="width:3rem" src=""
                                    alt="..." />
                            </td>
                            <td>{{ $announcement->title }}</td>
                            <td>{{ $announcement->price }}</td>
                            <td>{{ $announcement->category->name }}</td>
                            <td>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="{{route('announcement.show',  ['announcement' => $announcement->id])}}" class="btn searchAnimation mx-2">
                                        {{__('ui.ann35')}}
                                    </a>
                                        <button wire:click="edit({{$announcement}})" type="button" class="btn searchAnimation mx-2" data-toggle="modal" data-target="#exampleModal">
                                            {{__('ui.ann33')}}
                                        </button>
                                        <button wire:click="delete({{ $announcement }})" class="btn rounded-lg searchAnimation btn-danger mx-2">{{__('ui.ann34')}}</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <livewire:form >
            {{-- {{ $announcements->links() }} --}}
        </div>
    </div>
</div>
