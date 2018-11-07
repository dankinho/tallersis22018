<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
class Talonario extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
         'id_empresa', 'dosificacion', 'n_autorizacion','leyenda','estado','fecha_limite_emision', 'tx_fecha', 'tx_id', 'tx_host',
    ];
}
