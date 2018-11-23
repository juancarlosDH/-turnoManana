<?php

//clase 3 //vamos a organizar las rutas por prefijo y asignarles un nombre unico
Route::prefix('/actors')->name('actors.')->group( function(){
    //ejercicio 4.b.1
    Route::get('/search/', 'ActorsController@search')->name('search');
    //ejercicio 3.b
    Route::get('/{cosa}', 'ActorsController@show')->name('show');
    //ejercicio 3.a
    Route::get('/', 'ActorsController@index')->name('index');
});


Route::prefix('/genres')->name('genres.')->group( function(){
    Route::get('/new', 'GenresController@add')->name('add');
    Route::post('/', 'GenresController@save')->name('save');
    Route::get('/', 'GenresController@index')->name('listar');
});

//clase 2
Route::get('/generos/agregar', 'GenerosController@agregar');
Route::get('/generos/{id}', 'GenerosController@agregar');
Route::post('/generos/agregar', 'GenerosController@guardar');

//clase 1 y 2
Route::prefix('/movies')->name('movies.')->group( function(){
    Route::get('/buscar/{titulo}', 'PeliculasController@mostrarPelicula')->name('buscarPorTitulo');
    Route::get('/{id}', 'PeliculasController@buscarPeliculaId')->name('buscarPorId');

    Route::get('/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre')->name('buscarPorNombre');

    Route::get('/', 'PeliculasController@listar')->name('listar');
});


Route::get('/', 'HomeController@index');
