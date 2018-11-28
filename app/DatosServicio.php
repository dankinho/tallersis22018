<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatosServicio extends Model
{
    //use SoftDeletes; //Implementamos

    //protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    /*
    protected $fillable = [
        'id_comision', 'id_datos_servicio', 'cat_id_tipo_servicio','cat_id_estado_servicio','titulo','descripcion','precio_paseo','precio_alojamiento', 'tx_fecha', 'tx_id', 'tx_host'
    ];
    */
    protected $fillable = [
        'id_comision'
    ];
}
