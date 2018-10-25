<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talonario extends Model
{
    protected $fillable = [
         'id_empresa', 'dosificacion', 'n_autorizacion','leyenda','estado','fecha_limite_emision', 'tx_fecha', 'tx_id', 'tx_host',
    ];
}
