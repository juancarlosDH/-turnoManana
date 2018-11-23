<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    /**
     * Consulta todos los actores
     * @return view con una collection de Actor
     */
    public function index()
    {
        //traer todos los actores del modelo Actor, clase 3 ejercicio 3.a.iv
        $actors = \App\Actor::all();

        // envio los datos a la vista de listado de actores, clase 3 ejercicio 3.a.ii
        return view('actors.index')->with('actores', $actors);
    }

    /**
     * Consulta los datos de un actor
     * @param  int $id id del actor
     * @return view en blade enviando los datos del mismo
     */
    public function show($id)
    {
        //Traigo los datos de el actor por ese id
        $actor = \App\Actor::find($id);

        // $peliculaFavoritaID = $actor->favorite_movie_id;
        // $peliculaFavorita = \App\Movie::find($peliculaFavoritaID);

        //retorno la vista, clase 3 ejercicio 3.b.i, le mando los datos a la vista, 3.b.iii
        return view('actors.actor',
        [
            'actor' => $actor,
            //'peliculaFavorita'=>$peliculaFavorita
        ] );
    }

    /**
     * Consulta los actores usando un filtro
     * @return view con una collection de Actor
     */
    public function search()
    {
        //clase 3 ejercicio 4.b.11, uso primero un where con el first_name y un orWhere con el last name
        //  recordando que uso el like para que me traiga lo que coincida con...
        $actores = \App\Actor::where('first_name', 'like', '%'.$_GET['busqueda'].'%')
            ->orWhere('last_name', 'like', '%'.$_GET['busqueda'].'%')->get();

        //return view('actors.index')->with('actores', $actores);
        return view('actors.index', compact(['actores']));





    }

}
