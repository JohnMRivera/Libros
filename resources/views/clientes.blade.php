@extends('layouts.plantilla')

@section('contenido')

    @if(session()->has('registrado'))

        <script>
            Swal.fire(
                'Registrado!',
                'El cliente ha sido registrado con exito!'
                'success'
            )
        </script>

    @elseif(session()->has('editado'))

        <script>
            Swal.fire(
                'Editado!',
                'El cliente ha sido editado con exito!',
                'success'
            )
        </script>

    @elseif(session()->has('eliminado'))

        <script>
            Swal.fire(
                'Eliminado!',
                'El cliente ha sido eliminado!',
                'success'
            )
        </script>

    @endif

    <main>
        <h1 class="text-center mt-4 mb-4">Clientes</h1>

        <div class="container mb-4 table-responsive">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                       <th>Id Cliente</th>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Correo</th>
                       <th>INE</th>
                       <th>Fecha</th>
                       <th>Actualizar</th>
                       <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td> {{ $cliente->id }} </td>
                        <td> {{ $cliente->nombre }} </td>
                        <td> {{ $cliente->apellido }} </td>
                        <td> {{ $cliente->correo }} </td>
                        <td> {{ $cliente->INE }} </td>
                        <td> {{ $cliente->fecha }} </td>
                        <td>
                            <a class="btn btn-danger" href=" {{ route('cliente.edit', $cliente->id) }} ">Editar
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href=" {{ route('cliente.show', $cliente->id) }} ">Eliminar
                                <i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- @foreach($clientes as $cliente)

        <div class="container col-md-6 mb-5">
            <div class="card-header">
                <h2 class=" text-center text-primary fw-bold fs-3">{{ $cliente->nombre }} 
                {{ $cliente->apellido }}</h2>
            </div>
            <div class="card-body">
                <p><b class="fs-5">Correo: </b>{{ $cliente->correo }}</p>
                <p><b class="fs-5">N. INE: </b>{{ $cliente->INE }}</p>
            </div>
            <div class="card-footer">
                <a class="btn btn-danger" href=" {{ route('cliente.edit', $cliente->id) }} ">Editar
                    <i class="bi bi-pencil-square"></i>
                </a>
                <a class="btn btn-dark" href=" {{ route('cliente.show', $cliente->id) }} ">Eliminar
                    <i class="bi bi-trash3"></i></a>
            </div>
        </div>
        
        @endforeach --}}

    </main>

@endsection