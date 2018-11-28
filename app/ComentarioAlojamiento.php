<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioAlojamiento extends Model
{
    //
    protected $fillable = [
        'nombre', 'comentario'
        ];
}
