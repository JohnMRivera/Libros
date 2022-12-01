@extends('layouts.plantilla')

@section('contenido')

@if(session()->has('agregado'))

{!!

    "<script>
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'El libro " . session()->get('confirmacion') . " ha sido registrado correctamente',
      showConfirmButton: false,
      timer: 1600
    })
    </script>"
!!}

@elseif(session()->has('editado'))

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

        <h1 class="text-center text-primary fw-bold mt-3 mb-3">Libros</h1>

        <div class="container col-md-6 mb-3">
            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#ModalAgregar">Agregar
                    <i class="bi bi-plus-circle"></i>
                </button>
            </div>
        </div>

        <div class="container col-md-6">

            @foreach($libros as $libro)
            <div class="card mt-3 mb-3">
                <div class="card-header">
                    <h2 class="text-center text-primary fs-5">{{ $libro->titulo }}</h2>
                </div>
                <div class="card-body p-2">
                    <p class="mb-0"><b>Autor: </b>{{ $libro->autor }}</p>
                    {{-- <p class="mb-1"><b>Paginas: </b>{{ $libro->paginas }}</p> --}}
                    <p class="mb-0"><b>Editorial: </b>{{ $libro->editorial }}</p>
                    {{-- <p class="mb-1"><b>Email Editorial: </b>{{ $libro->email }}</p> --}}
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 d-flex justify-content-md-center">
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalEditar{{$libro->id}}">Editar
                            <i class="bi bi-pen"></i>
                        </button>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$libro->id}}">Eliminar
                            <i class="bi bi-trash3"></i>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDetalles{{$libro->id}}">Detalles...

                        </button>
                    </div>
                </div>
            </div>

            @include('m_editar_libros', ['id' => $libro->id])
            @include('m_eliminar_libros', ['id' => $libro->id])
            @include('m_detalles_libros', ['id' => $libro->id])

            @endforeach
        </div>
    </main>

    @include('m_agregar_libros')

@endsection