<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibros;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class controladorLibrosBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = DB::table('libros')->get();

        return view('libros', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro_libros');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorLibros $request)
    {
        DB::table('libros')->insert([
            'ISBN' => $request->input('txtISBN'),
            'titulo' => $request->input('txtTitulo'),
            'autor' => $request->input('txtAutor'),
            'paginas' => $request->input('txtPaginas'),
            'editorial' => $request->input('txtEditorial'),
            'email' => $request->input('txtEmailEditorial'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('libro/index')->with('agregado', 'El libro ha sido agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorLibros $request, $id)
    {
        DB::table('libros')->where('id', $id)->update([
            'ISBN' => $request->input('txtISBN'),
            'titulo' => $request->input('txtTitulo'),
            'autor' => $request->input('txtAutor'),
            'paginas' => $request->input('txtPaginas'),
            'editorial' => $request->input('txtEditorial'),
            'email' => $request->input('txtEmailEditorial'),
            'updated_at' => Carbon::now()
        ]);

        return redirect('libro/index')->with('editado','Libro editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('libros')->where('id', $id)->delete();

        return redirect('libro/index')->with('eliminado');
    }
}
