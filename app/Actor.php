<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //atributo para definir cuales campos en la tabla no pueden ser llenados por formulario o algun controller.
    protected $guarded = [];
    //para el caso que el modelo y la tabla no sigan la convencion de laravel, le decimos como se llama la tabla
    protected $table = "actors";

    /**
     * metodo que concatena el nombre y apellido
     * @return string
     */
    public function getFullName()
    {
        return $this->first_name . ' ' .$this->last_name;
    }

    public function favoriteMovie()
    {
        return $this->belongsTo( Movie::class, 'favorite_movie_id', 'id' );
    }

    public function movies()
    {
        return $this->belongsToMany( Movie::class, 'actor_movie', 'actor_id', 'movie_id');
    }










}
