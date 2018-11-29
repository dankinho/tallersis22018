<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioMascotaComentariosController extends Controller
{
    public function create()
    {
        return view('comentarios.create');
    }
    public function store(MascotaRequest $request)
    {


        $mascota = new Mascota ;
        $mascota -> id_clientes =Auth::user()->id;
        $mascota ->nombre_mascota = $request->nombre_mascota;
        $mascota ->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota ->genero = $request->genero;
        $mascota ->cat_raza =  $request->cat_raza;
        $mascota ->cat_tamano =  $request->cat_tamano;
        $mascota ->url_imagen_mascota ='www....';
        $mascota ->observaciones = $request->observaciones;
        $mascota -> tx_fecha  ='2018-10-05 17:55:08';
        $mascota -> tx_id  ='1';
        $mascota ->  tx_host   ='0.0.0.0';


        $mascota ->save();
        return redirect()->route('mascotas.index')
            ->with('info','La mascota fue actualizado');

    }
}
