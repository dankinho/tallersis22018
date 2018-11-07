<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'id', 'nombre', 'nit','telefono','celular','tipo_agencia','direccion','ciudad','estado','tx_fecha','tx_fecha','tx_host',
    ];
}
