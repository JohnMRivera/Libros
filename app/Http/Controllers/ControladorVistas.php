<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibros;

class ControladorVistas extends Controller
{
    //
    public function vistaPrincipal(){
        return view('principal');
    }

    public function vistaRegistroLibros(){
        return view('registro_libros');
    }

    public function procesarLibro(ValidadorLibros $request){
        $titulo = $_POST['txtTitulo'];

        $request->validate([
            "txtISBN" => "numeric",
            "txtTitulo" => "required",
            "txtPaginas" => "numeric",
            "txtEmailEditorial" => "email"
        ]);

        // $validado = $request->validated();
        // $validado = $request->safe()->only(['txtEmailEditorial','email']);
        // $validado = $request->safe()->except(['txtEmailEditorial','email']);

        return redirect()->route('reglib')->with('confirmacion', $titulo);
    }

    // public function validador(){

    // }

}