<?php

namespace App\Http\Controllers;
use App\ServiciosMascota;
use Illuminate\Http\Request;
use App\Servicio;
use App\EstadoServicioMascota;
use Illuminate\Support\Facades\Auth;
use App\item;
use App\Mascota;
class ServiciosMascotaController extends Controller
{
    public function  index()
    {
        $count_mascotas = Mascota::where('id_clientes','=',Auth::user()->id)->count();
        $mascotas = Mascota::where('id_clientes','=',Auth::user()->id)
            ->orderBy('id','DESC')
            ->paginate(6);

        $mascotasServicios = ServiciosMascota::where('id_mascota','=',1)
            ->orderBy('id','DESC')
            ->paginate(6);

        $desc = (string ) Servicio::  descripServicio(1); //descripcion del servicio
        //$estado = (string ) EstadoServicioMascota::  estadoshow(1);  //estado
        return view('serviciosMascotas.index'
            , compact('mascotasServicios' )
            ,compact('titulo' , 'desc','estado' ));


    }
    public function f1($id)
    {


        return  (string ) Servicio:: tituloServicio($id); //titulo del servicio;
    }
    public function show($id)
    {
        $servicioMascota = ServiciosMascota::find($id);
        return view('serviciosMascotas.show' ,compact('servicioMascota') );

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
}
