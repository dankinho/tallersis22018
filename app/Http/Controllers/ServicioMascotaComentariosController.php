<?php

namespace App\Http\Controllers;

use App\ServicioMascotaComentario;
use Illuminate\Http\Request;

use App\Http\Requests\ComentariosRequest;
class ServicioMascotaComentariosController extends Controller
{
    public function create()
    {
        return view('comentarios.create');
    }
    public function store(ComentariosRequest $request)
    {


        $comentario = new ServicioMascotaComentario() ;
        $comentario -> id_usuario= 1;
        $comentario -> id_servicio_mascota =1;
        $comentario ->fecha_hora = '2018-10-05 17:55:08';
        $comentario ->comentario = $request->comentario;

        $comentario ->calificacion = $request->calificacion;
        $comentario -> tx_fecha  ='2018-10-05 17:55:08';
        $comentario -> tx_id  ='1';
        $comentario ->  tx_host   ='0.0.0.0';


        $comentario ->save();
        return redirect()->route('ServicioMascotaComentario.index')
            ->with('info','La mascota fue actualizado');

    }
}
