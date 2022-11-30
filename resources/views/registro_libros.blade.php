@extends('layouts.plantilla')

@section('titulo_documento','Registro Libros')

@section('contenido')

@if(session()->has('confirmacion'))

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

@endif

    <div class="container col-md-5">
        
        <div class="card text-center mt-5 mb-5" style="background-color: rgba(0,0,0,0.2)">
            <footer>
                <div class="card-header">
                  Registrar Libro
                </div>
                <form action=" {{ route('gualib') }} " method="post">
                    @csrf
                    <div class="card-body opacity-50">
                        <div class="mt-2">
                            <label for="">ISBN</label>
                            <input type="text" class="form-control" name="txtISBN" value={{ old('txtISBN') }}>
                            @if($errors->first('txtISBN'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtISBN') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" name="txtTitulo" value={{ old('txtTitulo') }}>
                            {{-- @if($errors->first('txtTitulo'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtTitulo') }} </strong>    
                                </div>
                            @endif --}}
                            @error('txtTitulo')
                                <div class="alert alert-danger">
                                    <strong> {{ $message }} </strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Autor</label>
                            <input type="text" class="form-control" name="txtAutor" value={{ old('txtAutor') }}>
                            @if($errors->first('txtAutor'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtAutor') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label for="">Páginas</label>
                            <input type="text" class="form-control" name="txtPaginas" value={{ old('txtPaginas') }}>
                            @if($errors->first('txtPaginas'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtPaginas') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label for="">Editorial</label>
                            <input type="text" class="form-control" name="txtEditorial" value={{ old('txtEditorial') }}>
                            @if($errors->first('txtEditorial'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtEditorial') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label for="">Email de Editorial</label>
                            <input type="txt" class="form-control" name="txtEmailEditorial" value={{ old('txtEmailEditorial') }}>
                            @if($errors->first('txtEmailEditorial'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtEmailEditorial') }} </strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-2 mb-2" >Registrar</button>
                    </div>
                </form>
            </footer>
        </div>

    </div>

@endsection