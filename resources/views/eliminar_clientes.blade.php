@extends('layouts.plantilla')

@section('contenido')

    <main>
        <div class="container col-md-6">
            <h1 class="text-center text-primary fw-bold mt-4 mb-4">Eliminar cliente</h1>
            
            <div class="card mb-5">
                @foreach($clientes as $cliente)
                <form action=" {{ route('cliente.destroy', $cliente->id) }} " method="post">
                    @csrf
                    @method('delete')
                    <div class="card-header">
                        <h2 class="text-danger text-center fs-4">Seguro que quieres eliminar el cliente!?</h2>
                    </div>
                    <div class="card-body">
                        <p><b class="fs-5">Nombre: </b>{{ $cliente->nombre }}</p>
                        <p><b class="fs-5">Apellido: </b>{{ $cliente->apellido }}</p>
                        <p><b class="fs-5">N. INE: </b>{{ $cliente->INE }}</p>
                        <p><b class="fs-5">Correo: </b>{{ $cliente->correo }}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success" href=" {{ route('cliente.index') }} ">No, Regresame</a>
                        <button type="submit" class="btn btn-danger">Si, Eliminalo</button>
                    </div>
                </form>
                @endforeach
            </div>

        </div>
    </main>

@endsection