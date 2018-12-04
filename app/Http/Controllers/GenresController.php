<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenresController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index')->with(['genres'=>$genres]);
    }

    public function add()
    {
        return view('genres/add');
    }

    public function save(Request $request)
    {
        //aqui valido los campos
        $this->validate( $request, [
            'name' => 'required|unique:genres',
            'active' => 'required',
        //    'publico' => 'required|min:2'
        ], [
            //'name.required' => 'El campo nombre es requerido',
            'name.unique' => 'El nombre del genero ya existe',
            'required' => 'El campo es requerido',
        //    'publico.min' => 'Selecciona al menos dos categorias',
        ]);

        //si esta todo bien guardo en la BD
        $genre = Genre::create([
            'name' => $request->input('name')
        ]);

        return redirect('/genres');

    }

    public function edit( $id ){
        //consultar los datos del genero
        $genre = Genre::find($id);

        return view('genres.edit')->with('genre', $genre);
    }

    public function update( $id , Request $request){

        //aqui valido los campos
        $this->validate( $request, [
            'name' => 'required|unique:genres,name,'.$id,
            'active' => 'required',
        ], [
            //'name.required' => 'El campo nombre es requerido',
            'name.unique' => 'El nombre del genero ya existe',
            'required' => 'El campo es requerido',
        ]);

        //busco el genero por el id
        $genre = Genre::find( $id );

        //edito los atributos
        $genre->name = $request->input('name');
        $genre->active = $request->input('active');

        //ahora actualizo en la BD
        $genre->save();

        return redirect('/genres/');

    }

    public function delete( $id ){
        //busco el genero por el id
        $genre = Genre::find( $id );

        //elimino el genero
        $genre->delete();

        return redirect('/genres/');

    }







}
