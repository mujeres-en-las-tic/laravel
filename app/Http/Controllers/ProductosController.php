<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function show()
    {
        return view('productos');
    }

    public function edit()
    {
        

        return view('productos.edit');
    }
}
