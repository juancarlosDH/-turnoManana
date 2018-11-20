<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listar()
    {
        $peliculas = [
          ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
          ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
          ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
          ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
          ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
          ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
          ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
          ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
          ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
          ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
         ];

        return view('peliculas.listar', ['peliculas' => $peliculas] ) ;
    }

    public function mostrarPelicula($titulo)
    {
        $peliculas = [
          ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
          ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
          ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
          ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
          ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
          ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
          ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
          ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
          ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
          ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
         ];

         foreach ($peliculas as $peli) {
            if($peli['title'] == $titulo){
                return  "<h2>{$peli['title']} - {$peli['genre']}</h2>
                            <img width='150px;' src='/{$peli['poster']}'>";
            }
         }
         return  "<h2>No se encontró la película</h2>";
    }

    public function buscarPeliculaId($id)
    {
        $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
        ];
        if(isset($peliculas[$id])){
            return $peliculas[$id];
        }
        return 'No se encontro la peli';
    }

    public function buscarPeliculaNombre($nombre)
    {
        $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
        ];

        $peli = 'No se encontro la Peli';

        foreach ($peliculas as $value) {
            if($value == $nombre){
                $peli = $value;
                break;
            }
        }
        //return view('peliculas.mostrar')->with('peli', $peli) ;
        return view('peliculas.mostrar', ['pelicula' => $peli] ) ;
    }
}
