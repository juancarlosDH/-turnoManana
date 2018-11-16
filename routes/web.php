<?php

Route::get('/genero/agregar', 'GenerosController@agregar');
Route::post('/genero/agregar', 'GenerosController@guardar');

Route::get('/pelicula/buscar/{titulo}', 'PeliculasController@mostrarPelicula');
Route::get('/pelicula/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');

Route::get('/uno', function(){
    return '<h1>Hola Mundo</h1>';
});

Route::get('/peliculas', 'PeliculasController@listar');

Route::get('/', function () {
    return view('welcome');
});
