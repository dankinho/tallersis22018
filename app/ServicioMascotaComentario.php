<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
class ServicioMascotaComentario extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
        'id_usuario','id_servicio_mascota', 'fecha_hora', 'comentario','calificacion',  'tx_fecha', 'tx_id', 'tx_host',
    ];
}