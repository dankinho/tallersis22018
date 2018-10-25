<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'id_empresa', 'nombre', 'nit','telefono','celular','tipo_agencia','direccion','ciudad','tx_fecha','tx_fecha','tx_host',
    ];
}
