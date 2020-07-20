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

// Página Inicio
Route::get('/', function () {

     // variable, que contiene un texto
    $programa = 'Mujeres en las TIC 2020..';

    // Retornar una vista con datos
    return view('index')->with('programa', $programa );

})->name('inicio');

// Página Nosotros
Route::get('/nosotros', function () {
    // Retornar una vista
    return view('nosotros');
})->name('nosotros');


/* 
* Resource Controller
* El nombre en plural y el nombre del controlador en singular,
* unido con la palabra controller
*/
Route::resource('products', 'ProductController');

// Route::get('/products',             'ProductController@index');
// Route::get('/products/new',         'ProductController@create');
// Route::post('/products',            'ProductController@store');
// Route::get('/products/{id}',        'ProductController@show');
// Route::get('/products/{id}/edit',   'ProductController@edit');
// Route::patch('/products/{id}',      'ProductController@update');
// Route::delete('/products/{id}',     'ProductController@destroy');

Route::get('/contacto', function(){
    return view('contacto');
})->name('contacto');
