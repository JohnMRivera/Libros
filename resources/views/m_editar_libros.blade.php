<div class="modal fade" id="ModalEditar{{$id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEditar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary fw-bold fs-4" id="staticBackdropLabel">Actualizar Libro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('libro.update', $id) }}" method="post">
                @csrf
                @method('put')
            <div class="modal-body">
                    <div class="card-body">
                        <div>
                            <label class="fw-bold" for="">ISBN</label>
                            <input type="text" class="form-control" name="txtISBN" value={{ $libro->ISBN }}>
                            @if($errors->first('txtISBN'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtISBN') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label class="fw-bold" for="">Titulo</label>
                            <input type="text" class="form-control" name="txtTitulo" value={{ $libro->titulo }}>
                            @error('txtTitulo')
                                <div class="alert alert-danger">
                                    <strong> {{ $message }} </strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="fw-bold" for="">Autor</label>
                            <input type="text" class="form-control" name="txtAutor" value={{ $libro->autor }}>
                            @if($errors->first('txtAutor'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtAutor') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label class="fw-bold" for="">Páginas</label>
                            <input type="text" class="form-control" name="txtPaginas" value={{ $libro->paginas }}>
                            @if($errors->first('txtPaginas'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtPaginas') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label class="fw-bold" for="">Editorial</label>
                            <input type="text" class="form-control" name="txtEditorial" value={{ $libro->editorial}}>
                            @if($errors->first('txtEditorial'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtEditorial') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-2">
                            <label class="fw-bold" for="">Email de Editorial</label>
                            <input type="txt" class="form-control" name="txtEmailEditorial" value={{ $libro->email }}>
                            @if($errors->first('txtEmailEditorial'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtEmailEditorial') }} </strong>
                                </div>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Actualizar</button>
            </div>
        </form>
        </div>
    </div>
</div>