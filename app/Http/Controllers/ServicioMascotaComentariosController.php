<?php

namespace App\Http\Controllers;
use App\Mascota;
use App\ServiciosMascota;
use App\ServicioMascotaComentario;
use App\Http\Requests\ComentariosRequest;

use Illuminate\Support\Facades\Auth;
use App\Servicio;
use App\EstadoServicioMascota;
use App\item;

class ServicioMascotaComentariosController extends Controller
{
    public $u="h";
    public function  index( )
    {

         return view('comentarios.create'   );
    }
        public function show($id)
    {     $mascotaServ = ServiciosMascota::find($id);
        $titulo = Servicio::tituloServicio($mascotaServ->id_servicio);
        $desc=Servicio::descripServicio($mascotaServ->id_servicio);
        $estado=EstadoServicioMascota::estadoServicioShow($mascotaServ->id_estado_servicio);

        $nombreMascota = Mascota::nombreMascota($mascotaServ->id_mascota);
        $tipoServicio = item::itemsshow($mascotaServ->cat_id_tipo_servicio);
        $aut= Auth::user();
        $comentarios = ServicioMascotaComentario::where('id_usuario','=',1)->where('id_servicio_mascota','=',1)
            ->orderBy('id','DESC')
            ->paginate(6);



        return view('comentarios.create' ,compact('mascotaServ')
            ,compact('titulo' ,'desc','estado','nombreMascota','tipoServicio', 'comentarios' ));
    }
    public function create( )
    {

        return view('comentarios.create');
    }
    public function update(ComentariosRequest $request,$id )
    {
        $now = new \DateTime();
        $now->format('d-m-Y H:i:s');

        $comentario = new ServicioMascotaComentario() ;
        $comentario -> id_usuario= Auth::user()->id;
        $comentario -> id_servicio_mascota =$id;
        $comentario ->fecha_hora = $now;
        $comentario ->comentario = $request->comentario;

        $comentario ->calificacion = $request->calificacion;
        $comentario -> tx_fecha  =$now;
        $comentario -> tx_id  =Auth::user()->id;
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

