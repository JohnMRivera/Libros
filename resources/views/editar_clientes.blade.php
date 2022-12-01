@extends('layouts.plantilla')

@section('contenido')

    <main>
        <div class="container col-md-4">
            <h1 class="text-center text-primary fw-bold mt-4 mb-4">Editar Cliente</h1>

            <div class="card text-center mb-5">
                @foreach($clienteId as $cliente)
                <form action=" {{ route('cliente.update', $cliente->id) }} " method="post">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        <h2 class="text-danger fs-4">Actualizar</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="">Nombre</label>
                            <input type="text" class="form-control" name="txtNombre" value={{ $cliente->nombre }}>
                        </div>
                        @if($errors->first('txtNombre'))
                            <strong class="text-danger">{{ $errors->first('txtNombre') }}</strong>
                        @endif
                        <div class="mb-3">
                            <label class="form-label" for="">Apellido</label>
                            <input type="text" class="form-control" name="txtApellido" value="{{ $cliente->apellido }}">
                        </div>
                        @if($errors->first('txtApellido'))
                            <strong class="text-danger">
                                {{ $errors->first('txtApellido') }}
                            </strong>
                        @endif
                        <div class="mb-3">
                            <label class="form-label" for="">N. INE</label>
                            <input type="text" class="form-control" name="txtINE" value="{{ $cliente->INE }}">
                        </div>
                        @if($errors->first('txtINE'))
                            <strong class="text-danger">
                                {{ $errors->first('txtINE') }}
                            </strong>
                        @endif
                        <div class="mb-3">
                            <label class="form-label" for="">Correo</label>
                            <input type="text" class="form-control" name="txtCorreo" value="{{ $cliente->correo }}">
                        </div>
                        @if($errors->first('txtCorreo'))
                        <strong class="text-danger">
                            {{ $errors->first('txtCorreo') }}
                        </strong>
                        @endif
                        <div>
                            <label class="form-label" for="">Contra</label>
                            <input type="text" class="form-control" name="txtContra" value="{{ $cliente->contra }}">
                        </div>
                        @if($errors->first('txtContra'))
                        <strong class="text-danger">
                            {{ $errors->first('txtContra') }}
                        </strong>
                        @endif
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success" href=" {{ route('cliente.index') }} ">Regresame</a>
                        <button type="submit" class="btn btn-danger col-md-3">Editar</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </main>

@endsection