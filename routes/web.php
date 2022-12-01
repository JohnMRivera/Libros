<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\controladorClientesBD;
use App\Http\Controllers\controladorLibrosBD;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(ControladorVistas::class)->group(function(){
    Route::get('/','vistaPrincipal')->name('pri');
    Route::get('registro_libros','vistaRegistroLibros')->name('reglib');
});

Route::post('guardarLibro',[ControladorVistas::class, 'procesarLibro'])->name('gualib');

Route::controller(controladorClientesBD::class)->group(function(){

    Route::get('cliente/create','create')->name('cliente.create');

    Route::get('cliente/index','index')->name('cliente.index');

    Route::post('cliente/store','store')->name('cliente.store');

    Route::get('cliente/{id}/edit','edit')->name('cliente.edit');

    Route::put('cliente/{id}/update','update')->name('cliente.update');

    Route::get('cliente/{id}/show','show')->name('cliente.show');

    Route::delete('cliente/{id}/destroy','destroy')->name('cliente.destroy');

});

Route::controller(controladorLibrosBD::class)->group(function(){
    
    Route::get('libro/create','create')->name('libro.create');

    Route::post('libro/store','store')->name('libro.store');

    Route::get('libro/index','index')->name('libro.index');

    Route::put('libro/{id}/update','update')->name('libro.update');

    Route::delete('libro/{id}/destroy','destroy')->name('libro.destroy');

});