<?php

namespace App\Http\Controllers;
use App\ServiciosMascota;
use App\User;
use Illuminate\Http\Request;
use App\Servicio;
use App\EstadoServicioMascota;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\item;
use App\Mascota;
use App\ServicioMascotaComentario;
class ServiciosMascotaController extends Controller
{
    public function  index(Request $request)
    {
// ->where('id_estado_servicio','=',1)
        $mascotasServicios = ServiciosMascota::name($request->get('name'))
            ->where('id_usuario','=',Auth::user()->id)

            ->orderBy('id','DESC')
            ->paginate(6);
        $m=Mascota::where('id_clientes','=',Auth::user()->id)
            ->get( ) ->pluck('nombre_mascota','id');
        return view('serviciosMascotas.index'
            , compact('mascotasServicios' ,'m')
           );

    return view('serviciosMascotas.create',["datos"=>$datos]);

    }
    public function f1($id)
    {


        return  (string ) Servicio:: tituloServicio($id); //titulo del servicio;
    }
    public function show($id)
    {
        $mascotaServ = ServiciosMascota::find($id);
        $titulo = Servicio::tituloServicio($mascotaServ->id_servicio);
        $desc=Servicio::descripServicio($mascotaServ->id_servicio);
        $estado=EstadoServicioMascota::estadoServicioShow($mascotaServ->id_estado_servicio);

        $nombreMascota = Mascota::nombreMascota($mascotaServ->id_mascota);
        $tipoServicio = item::itemsshow($mascotaServ->cat_id_tipo_servicio);
        $aut= Auth::user();
        $comentarios = ServicioMascotaComentario::where('id_usuario','=',Auth::user()->id)->where('id_servicio_mascota','=',$id)
            ->orderBy('id','DESC')
            ->paginate(6);


        return view('serviciosMascotas.show' ,compact('mascotaServ')
            ,compact('titulo' ,'desc','estado','nombreMascota','tipoServicio', 'comentarios' ));

    }

    public function store(ServicioMascota $request)
    {



        return redirect()->route('serviciosMascotas.index')
            ->with('info','La mascota fue actualizado');

    }
    public function update(MascotaRequest $request, $id)
    {
        return redirect()->route('mascotas.index')
            ->with('info','La mascota fue actualizado');
    }
    public function edit($id)
    {
        $mascota = ServiciosMascota::find($id);

        return view('mascotas.edit'
            ,compact('mascota') );
    }
    public function create()
    {
        $datos=DB::table ('servicios_mascotas')
            ->select ('*')
            ->join('estado_servicio_mascotas','estado_servicio_mascotas.id','=','servicios_mascotas.id_estado_servicio')
            ->join('mascotas','mascotas.id','=','servicios_mascotas.id_mascota')
            ->join('servicios','servicios.id','=','servicios_mascotas.id_servicio')

            ->where ('id_usuario','=',Auth::user()->id)
            ->get();
//dd($datos);
        return view('serviciosMascotas.create',compact('datos'));

    }
    public function destroy($id)
    {
        $serviciosMascota  = ServiciosMascota::find($id);
        $serviciosMascota->delete();
        return back()->with('info','La mascota fue eliminado logicamente');
    }


}
