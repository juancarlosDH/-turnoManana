<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function agregar($id, Request $request)
    {
        return view('generos/agregar');
    }

    public function guardar()
    {
        return view('generos.mostrar')->with('genero', $_POST['nombre']);
    }
}
