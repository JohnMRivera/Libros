<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorClientes;
use DB;
use Carbon\Carbon;

class controladorClientesBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::table('clientes')->get();

        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro_clientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            'nombre' => $request->input('txtNombre'),
            'apellido' => $request->input('txtApellido'),
            'INE' => $request->input('txtINE'),
            'correo' => $request->input('txtCorreo'),
            'contra' => $request->input('txtContra'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('cliente.create')->with('registrado','Cliente registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = DB::table('clientes')->where('id', $id)->get();

        return view('eliminar_clientes', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clienteId = DB::table('clientes')->where('id', $id)->get();

        return view('editar_clientes', compact('clienteId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorClientes $request, $id)
    {
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('txtNombre'),
            'apellido' => $request->input('txtApellido'),
            'INE' => $request->input('txtINE'),
            'correo' => $request->input('txtCorreo'),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('cliente.index')->with('editado','Cliente editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('clientes')->where('id', $id)->delete();

        return redirect()->route('cliente.index')->with('eliminado','Cliente eliminado');
    }
}
