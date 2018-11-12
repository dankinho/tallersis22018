<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria
class item extends Model
{
    use SoftDeletes; //Implementamos

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    //
    protected $fillable = [
        'id_catalogos', 'codigo', 'nombre','descripcion',  'tx_fecha', 'tx_id', 'tx_host',
    ];

    public static function items1($id){
        return item::where('id_catalogos','=',$id)
            ->get( ) ->pluck('nombre','id');
        ;
    }
    public static function itemsshow($id ){
        return  item::where('id','=',$id)
            ->value('nombre') ;
    }
    public static function items_id_cat($id){
        return  item::where('id','=',$id)

            ->value('id') ;
    }
}
