<?php

namespace App\Http\Controllers;
use App\ServiciosMascota;
use Illuminate\Http\Request;

class ServiciosMascotaController extends Controller
{
    public function  index()
    {
        $mascotasServicios = ServiciosMascota::where('id_mascota','=',1)
            ->orderBy('id','DESC')
            ->paginate(6);


        return view('serviciosMascotas.index', compact('mascotasServicios' ));


    }
    public function show($id)
    {
        $servicioMascota = ServiciosMascota::find($id);
        return view('mascotas.show' ,compact('servicioMascota') );

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
