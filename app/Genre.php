<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'cosa';
    protected $guarded = ['created_at', 'updated_at'];
}
