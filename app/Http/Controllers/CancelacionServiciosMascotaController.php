<?php

namespace App\Http\Controllers;

use App\Http\Requests\CancelacionServiciosMascotaRequest;
use Illuminate\Http\Request;
use App\ServiciosMascota;
use App\Servicio;
use App\EstadoServicioMascota;
use Illuminate\Support\Facades\Auth;
use App\item;
use App\Mascota;
use App\ServicioMascotaComentario;
use App\cancelacionServiciosMascota;
class CancelacionServiciosMascotaController extends Controller
{
    public function  index( )
    {

        return view('cancelaciones.create'   );
    }
    public function show( $id)
    {
         $mascotaServ = ServiciosMascota::find($id);
        $titulo = Servicio::tituloServicio($mascotaServ->id_servicio);
        $desc=Servicio::descripServicio($mascotaServ->id_servicio);
        $estado=EstadoServicioMascota::estadoServicioShow($mascotaServ->id_estado_servicio);

        $nombreMascota = Mascota::nombreMascota($mascotaServ->id_mascota);
        $tipoServicio = item::itemsshow($mascotaServ->cat_id_tipo_servicio);
        $aut= Auth::user();
        $comentarios = ServicioMascotaComentario::where('id_usuario','=',1)->where('id_servicio_mascota','=',1)
            ->orderBy('id','DESC')
            ->paginate(6);



        return view('cancelaciones.create' ,compact('mascotaServ')
            ,compact('titulo' ,'desc','estado','nombreMascota','tipoServicio', 'comentarios' ));
    }
    public function update(CancelacionServiciosMascotaRequest $request,$id )
    {
        $now = new \DateTime();
        //$now->format('d-m-Y H:i:s');
        $now->format('d-m-Y');

        $can = new cancelacionServiciosMascota() ;
        $can->id_servicio_mascota = $id;
        $can ->id_estado =1;
        $can ->fecha_cancelacion = $now;
        $can ->justificacion = $request->comentario;

        $can -> tx_fecha  ='2018-10-05 17:55:08';
        $can -> tx_id  ='1';
        $can ->  tx_host   ='0.0.0.0';

        //cambiar estado
        $serv =  ServiciosMascota::find($id);
        $serv->id_estado_servicio = 3;
        $serv->save();
        $can ->save();
        //
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
