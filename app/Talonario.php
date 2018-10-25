<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talonario extends Model
{
    protected $fillable = [
        'id_talonarios', 'dosificacion', 'n_autorizacion','leyenda','fecha_limite_emision', 'tx_fecha', 'tx_id', 'tx_host',
    ];
}
