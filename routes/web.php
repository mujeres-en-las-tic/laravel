<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {

    $programa = 'Mujeres en las TIC 2020..';

    return view('index')->with('programa', $programa );

})->name('inicio');


Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/productos', 'ProductosController@show')
    ->name('productos');

Route::get('/contacto', function(){
    return "Página contacto";
})->name('contacto');




