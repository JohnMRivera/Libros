<div class="modal fade" id="ModalDetalles{{$id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalDetalles" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary fw-bold fs-4" id="staticBackdropLabel">Detalles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('libro.destroy', $id) }}" method="post">
                @csrf
                @method('delete')
            <div class="modal-body p-0">
                <div class="card-header">
                    <h2 class="text-center text-danger fs-5">{{ $libro->titulo }}</h2>
                </div>
                <div class="card-body">
                    <p class="mb-1"><b>ISBN: </b>{{ $libro->ISBN }}</p>
                    <p class="mb-1"><b>Autor: </b>{{ $libro->autor }}</p>
                    <p class="mb-1"><b>Paginas: </b>{{ $libro->paginas }}</p>
                    <p class="mb-1"><b>Editorial: </b>{{ $libro->editorial }}</p>
                    <p class="mb-1"><b>Email Editorial: </b>{{ $libro->email }}</p>
                    <p class="mb-1"><b>Fecha: </b>{{ $libro->fecha }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </form>
        </div>
    </div>
</div>