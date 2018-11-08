<?php

namespace App\Http\Controllers;
use App\Mascota;
use Illuminate\Http\Request;

use App\Http\Requests\MascotaRequest;
class MascotaController extends Controller
{
    public function  index()
    {
        $mascotas = Mascota::orderBy('id','DESC')->paginate();

        return view('mascotas.index', compact('mascotas'));

    }
    public function show($id)
    {
        $mascota = Mascota::find($id);

        return view('mascotas.show', compact('mascota'));
    }

    public function store(MascotaRequest $request)
    {


        $mascota = new Mascota ;
        $mascota -> id_clientes =1;
        $mascota ->nombre_mascota = $request->nombre_mascota;
        $mascota ->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota ->genero = $request->genero;
        $mascota ->cat_raza = 8;
            $mascota ->cat_tamano = 15;
                $mascota ->url_imagen_mascota ='www....';
                $mascota ->observaciones = $request->observaciones;
        $mascota -> tx_fecha  ='2018-10-05 17:55:08';
        $mascota -> tx_id  ='1';
        $mascota ->  tx_host   ='0.0.0.0';


        $mascota ->save();
        return redirect()->route('mascotas.index')
            ->with('info','La mascota fue actualizado');

    }
    public function update(MascotaRequest $request, $id)
    {$now = new \DateTime();
        $mascota = Mascota::find($id);
        // $talonario-> id_empresa =1;
        $mascota ->nombre_mascota = $request->nombre_mascota;
        $mascota ->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota ->genero = $request->genero;
        $mascota ->observaciones = $request->observaciones;

        $mascota-> tx_fecha  ='2018-10-05 17:55:08';
        $mascota->  tx_id  ='1';
        $mascota->  tx_host   ='0.0.0.0';


        $$mascota->save();
        return redirect()->route('mascotas.index')
            ->with('info','La mascota fue actualizado');
    }
    public function edit($id)
    {
        $mascota = Mascota::find($id);

        return view('mascotas.edit', compact('mascota'));
    }
    public function create()
    {
        return view('mascotas.create');
    }
    public function destroy($id)
    {
        $mascota = Mascota::find($id);
        $mascota->delete();
        return back()->with('info','La mascota fue eliminado logicamente');
    }
}
