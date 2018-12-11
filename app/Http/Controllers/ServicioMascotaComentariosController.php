<?php

namespace App\Http\Controllers;
use App\Mascota;
use App\ServiciosMascota;
use App\ServicioMascotaComentario;
use App\Http\Requests\ComentariosRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ServicioMascotaComentariosController extends Controller
{
    public $u="h";
    public function  index( )
    {

         return view('comentarios.create'   );
    }
        public function show($id)
    {    $servicioMascota= ServiciosMascota::find($id);
    $u="h".$id;
        return view('comentarios.create' , compact( 'u'));
    }
    public function create( )
    {

        return view('comentarios.create');
    }
    public function store(ComentariosRequest $request)
    {


        $comentario = new ServicioMascotaComentario() ;
        $comentario -> id_usuario= Auth::user()->id;
        $comentario -> id_servicio_mascota =$request->mascotaServ;
        $comentario ->fecha_hora = '2018-10-05 17:55:08';
        $comentario ->comentario = $request->comentario;

        $comentario ->calificacion = $request->calificacion;
        $comentario -> tx_fecha  ='2018-10-05 17:55:08';
        $comentario -> tx_id  ='1';
        $comentario ->  tx_host   ='0.0.0.0';


        $comentario ->save();


        $mascotasServicios = ServiciosMascota::name($request->get('name'))
            ->where('id_usuario','=',Auth::user()->id)
            ->orderBy('id','DESC')
            ->paginate(6);
        $m=Mascota::where('id_clientes','=',Auth::user()->id)
            ->get( ) ->pluck('nombre_mascota','id');
        return view('serviciosMascotas.index'
            , compact('mascotasServicios' ,'m')
        );

    }
}

