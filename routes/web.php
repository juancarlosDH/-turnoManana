<?php

//clase 3
Route::prefix('/genres')->name('genres.')->group( function(){
    Route::get('/new', 'GenresController@add')->name('add');
    Route::post('/', 'GenresController@save')->name('save');
    Route::get('/', 'GenresController@index')->name('listar');
});

//clase 2
Route::get('/generos/agregar', 'GenerosController@agregar');
Route::post('/generos/agregar', 'GenerosController@guardar');

//clase 1 y 2
Route::prefix('/movies')->name('movies.')->group( function(){
    Route::get('/buscar/{titulo}', 'PeliculasController@mostrarPelicula')->name('buscarPorTitulo');
    Route::get('/{id}', 'PeliculasController@buscarPeliculaId')->name('buscarPorId');

    Route::get('/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre')->name('buscarPorNombre');

    Route::get('/', 'PeliculasController@listar')->name('listar');
});


Route::get('/', 'HomeController@index');
