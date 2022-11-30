@extends('layouts.plantilla')

@section('contenido')

@if(session()->has('registrado'))
    
<script>
    Swal.fire(
        'Registrado!',
        'Cuenta registrada exitosamente!',
        'success'
    )
</script>

@endif

<main>
    <header>
        <h1 class="text-center mt-3 text-primary fw-bold mb-4">Registrar Cliente</h1>
    </header>
    <div class="container col-md-4 mb-4">
        <div class="card text-center">
            <form action=" {{ route('cliente.store') }} " method="post">
                @csrf

                <div class="card-header fw-bold">
                    Llenar los campos
                </div>
                <div class="card-body">
                    <div class="mt-2">
                        <label class="form-label" for="">Nombre</label>
                        <input class="form-control" type="text" name="txtNombre">
                        @if($errors->first('txtNombre'))
                            <div class="alert alert-danger">
                                <strong> {{ $errors->first('txtNombre') }} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="mt-2 mb-2">
                        <label class="form-label" for="">Apellido</label>
                        <input class="form-control" type="text" name="txtApellido">
                        @if($errors->first('txtApellido'))
                            <div class="alert alert-danger">
                                <strong> {{ $errors->first('txtApellido')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="mt-2 mb-2">
                        <label class="form-label" for="">N. INE</label>
                        <input class="form-control" type="text" name="txtINE">
                        @if($errors->first('txtContra'))
                            <div class="alert alert-danger">
                                <strong> {{ $errors->first('txtINE')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="mt-2 mb-2">
                        <label class="form-label" for="">Correo</label>
                        <input class="form-control" type="text" name="txtCorreo">
                        @if($errors->first('txtCorreo'))
                            <div class="alert alert-danger">
                                <strong> {{ $errors->first('txtCorreo')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="mt-2 mb-2">
                        <label class="form-label" for="">Contraseña</label>
                        <input class="form-control" type="password" name="txtContra">
                        @if($errors->first('txtContra'))
                            <div class="alert alert-danger">
                                <strong> {{ $errors->first('txtContra')}} </strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-footer text-muted">
                    {{-- <a href="{{route('log')}}" class="btn btn-primary">Ya tienes cuenta!</a> --}}
                    <button type="submit" class="btn btn-danger mt-2 mb-2">Registrar Cuenta</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection