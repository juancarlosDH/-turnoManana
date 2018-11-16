<?php

$cosas = 'algo';

Route::get('/Clase1/{nombre}/{apellido?}', function($nombre, $apellido='Coso') use ($cosas){
    $mivar =  '<h1>Hola a '.$nombre.', '.$apellido.', '.$cosas.'</h1>';
    return $mivar;
});

Route::get('/Clase1', function(){
    return '<h1>Hola a Todos</h1>
        <img src="https://www.codeforest.net/wp-content/uploads/2013/04/laravel-logo-big-570x398.png">';
});







Route::get('/', function () {
    return view('welcome');
});
