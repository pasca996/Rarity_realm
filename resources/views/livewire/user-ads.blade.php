<div>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

        <div class="container mt-5">
            <div class="align-middle gap-2 d-flex justify-content-between">
                <h3>Elenco annunci inseriti</h3>
                <form class="d-flex" action="{{ route('announcement.search') }}" method="GET">
                    <input class="form-control me-2" name="searched" type="search" placeholder="Cerca"
                    aria-label="Search">
                </form>
                <a href="{{ route('announcement.create') }}" class="btn searchAnimation bg-green me-md-2">
                    Crea Nuovo Articolo
                </a>
            </div>
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Categoria</th>
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
                                    <a href="{{route('announcement.show',  ['announcement' => $announcement->id])}}" class="btn searchAnimation mx-2 me-md-2">
                                        Vedi annuncio
                                    </a>
                                        <button wire:click="edit({{$announcement}})" type="button" class="btn searchAnimation mx-2 me-md-2" data-toggle="modal" data-target="#exampleModal">
                                            Modifica
                                        </button>
                                        <button wire:click="delete({{ $announcement }})" class="btn rounded-lg searchAnimation btn-danger mx-2 me-md-2">Elimina</button>
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
