@extends('layouts.plantilla')

@section('contenido')

    @if(session()->has('editado'))

        <script>
            Swal.fire(
                'Actualizado!',
                'El libro ha sido actualizado!',
                'success'
            )
        </script>

    @elseif(session()->has('eliminado'))

        <script>
            Swal.fire(
                'Eliminado!',
                'El libro ha sido eliminado!',
                'success'
            )
        </script>

    @endif

    <main>

        <h1 class="text-center text-primary fw-bold mt-4 mb-4">Libros</h1>

        <div class="container col-md-6 mb-4">
            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#ModalAgregar">Agregar
                    <i class="bi bi-plus-circle"></i>
                </button>
            </div>
        </div>

        <div class="container col-md-6">


            @foreach($libros as $libro)
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <h2 class="text-center text-danger fs-5"><b>ISBN: </b>{{ $libro->ISBN }} <b>Titulo: </b>{{ $libro->titulo }}</h2>
                </div>
                <div class="card-body">
                    <p class="mb-1"><b>Autor: </b>{{ $libro->autor }}</p>
                    <p class="mb-1"><b>Paginas: </b>{{ $libro->paginas }}</p>
                    <p class="mb-1"><b>Editorial: </b>{{ $libro->editorial }}</p>
                    <p class="mb-1"><b>Email Editorial: </b>{{ $libro->email }}</p>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 d-flex justify-content-md-center">
                        <button type="button" class="btn btn-outline-danger col-md-2" data-bs-toggle="modal" data-bs-target="#ModalEditar{{$libro->id}}">Editar
                            <i class="bi bi-pen"></i>
                        </button>
                        <button type="button" class="btn btn-outline-success col-md-2" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$libro->id}}">Eliminar
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </div>
            </div>

            @include('m_agregar_libros')
            @include('m_editar_libros', ['id' => $libro->id])
            @include('m_eliminar_libros', ['id' => $libro->id])

            @endforeach
        </div>
    </main>

@endsection