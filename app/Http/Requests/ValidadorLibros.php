<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibros extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "txtISBN" => "required|numeric|min:13",
            "txtTitulo" => "required",
            "txtAutor" => "required",
            "txtPaginas" => "required|numeric",
            "txtEditorial" => "required",
            "txtEmailEditorial" => "required|email"
        ];
    }

    public function messages(){
        return [
            "txtISBN.required" => "El ISBN es requerido",
            "txtISBN.min" => "El ISBN debe ser de al menos 13 caracteres",
            "txtISBN.numeric" => "El ISBN debe estar contenido de solo números",
            "txtTitulo.required" => "El Titulo es requerido",
            "txtAutor.required" => "El Autor es requerido",
            "txtPaginas.required" => "Las Páginas son requeridas",
            "txtPaginas.numeric" => "El número de páginas debe ser con solo números",
            "txtEditorial.required" => "La Editorial es requerida",
            "txtEmailEditorial.required" => "El Email de la Editorial es requerido",
            "txtEmailEditorial.email" => "El Email debe ser una dirección de correo valida"
        ];
    }

    // public function store(StorePostRequest $request){

    // }
}
