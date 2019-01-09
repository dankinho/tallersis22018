<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
class cancelacionServiciosMascota extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
        'id_servicio_mascota','id_estado', 'fecha_cancelacion', 'justificacion', 'tx_fecha', 'tx_id', 'tx_host',
    ];
}