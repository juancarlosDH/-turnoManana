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
    Route::get('/{id}/edit', 'GenresController@edit');
    Route::post('/{id}/edit', 'GenresController@update');

    Route::get('/{id}/delete', 'GenresController@delete');

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


Route::get('/', 'HomeController@index')->middleware('auth');

Route::get('/welcome', function(){
    return view('welcome');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
