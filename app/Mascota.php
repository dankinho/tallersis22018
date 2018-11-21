<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
class Mascota extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
        'id_clientes', 'nombre_mascota', 'fecha_nacimiento','genero','cat_raza','cat_tamano',
        'url_imagen_mascota', 'observaciones',
        'tx_fecha', 'tx_id', 'tx_host',
    ];
    public static function nombreMascota($id)
    {
        return Servicio::where('id', '=', $id)
            ->value('nombre_mascota');
    }
}
