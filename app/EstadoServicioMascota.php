<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoServicioMascota extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
        'estado',
        'tx_fecha', 'tx_id', 'tx_host',
    ];

    public static function estadoshow($id ){
        return  item::where('id','=',$id)
            ->value('estado') ;
    }
}
