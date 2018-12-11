<?php

namespace App\Http\Controllers;
use App\ServiciosMascota;
use Illuminate\Http\Request;
use App\Servicio;
use App\EstadoServicioMascota;
use Illuminate\Support\Facades\Auth;
use App\item;
use App\Mascota;
use App\ServicioMascotaComentario;
class ServiciosMascotaController extends Controller
{
    public function  index()
    {
        $mascotasServicios = ServiciosMascota::where('id_mascota','=',1)
            ->orderBy('id','DESC')
            ->paginate(6);

        return view('serviciosMascotas.index'
            , compact('mascotasServicios' )
           );


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
        $comentarios = ServicioMascotaComentario::where('id_usuario','=',1)->where('id_servicio_mascota','=',1)
            ->orderBy('id','DESC')
            ->paginate(6);

        return view('serviciosMascotas.show' ,compact('mascotaServ')
            ,compact('titulo' ,'desc','estado','nombreMascota','tipoServicio', 'comentarios' ));

    }

    public function store(MascotaRequest $request)
    {



        return redirect()->route('mascotas.index')
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
        // $items = item::pluck('nombre','id');

        return view('mascotas.create');
    }
    public function destroy($id)
    {
        $serviciosMascota  = ServiciosMascota::find($id);
        $serviciosMascota->delete();
        return back()->with('info','La mascota fue eliminado logicamente');
    }
    public function scopeName($query, $name)
    {
        return $query->where('name', $name);
    }
}
