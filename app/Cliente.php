<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
class Cliente extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
        'id_usuarios', 'nombre_cliente', 'apellido_cliente', 'cat_id_tipo_identidad',
        'num_doc_identidad', 'genero_cliente',
        'direccion_casa', 'direccion_numero_casa', 'estado_usuario', 'cat_macrodistrito',
        'tx_fecha', 'tx_id', 'tx_host',
    ];

}
