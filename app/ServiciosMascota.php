<?php

namespace App;
use function foo\func;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
class ServiciosMascota extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
        'id_servicio', 'id_mascota','id_usuario','id_estado_servicio','cat_id_tipo_servicio' ,
        'fecha_servicio_inicio', 'fecha_servicio_final',
        'precio_servicio_mascota', 'porcentaje_comision', 'url_imagen_servicio_mascota',
        'tx_fecha', 'tx_id', 'tx_host',
    ];

    public function scopeName($query, $name)
    {
        if(trim($name) !="")
        {
            $query->where("id_mascota", "=",$name );

        }

    }


}
