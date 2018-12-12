<?php

namespace App\Http\Controllers;
use App\Mascota;
use App\Cliente;
use Illuminate\Http\Request;
use App\item;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MascotaRequest;
class MascotaController extends Controller
{
    public function  index()
    {
        $id1 = Auth::user()->id;
        $mascotas = Mascota::where('id_clientes','=',$id1)
        ->orderBy('id','DESC')
            ->paginate(6);

        $usuarios = Cliente::find(2);
        $items = (string )item:: itemsshow($usuarios->cat_macrodistrito ); //macrodistrito
         return view('mascotas.index', compact('mascotas','usuarios','items' ));


    }
    public function show($id)
    {
        $mascota = Mascota::find($id);
        $items = (string )item:: itemsshow($mascota->cat_raza ); //raza
        $items1 = (string )item:: itemsshow($mascota->cat_tamano ); //tamano
        return view('mascotas.show'
        ,compact('mascota')
            ,compact('items' ,'items1'));

    }
    public function save(Request $request)
    {
        $now = new \DateTime();
        $now->format('d-m-Y H:i:s');

        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        //
        $mascota = new Mascota ;
        $mascota -> id_clientes =Auth::user()->id;
        $mascota ->nombre_mascota = $request->nombre_mascota;
        $mascota ->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota ->genero = $request->genero;
        $mascota ->cat_raza =  $request->cat_raza;
        $mascota ->cat_tamano =  $request->cat_tamano;
        $mascota ->url_imagen_mascota =$nombre;
        $mascota ->observaciones = $request->observaciones;
        $mascota -> tx_fecha  =$now;
        $mascota -> tx_id  =Auth::user()->id;
        $mascota ->  tx_host   ='0.0.0.0';


        $mascota ->save();
        return redirect()->route('mascotas.store');
    }
    public function store(MascotaRequest $request)
    {    $now = new \DateTime();
        $now->format('d-m-Y H:i:s');

        $mascota = new Mascota ;
        $mascota -> id_clientes =Auth::user()->id;
        $mascota ->nombre_mascota = $request->nombre_mascota;
        $mascota ->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota ->genero = $request->genero;
        $mascota ->cat_raza =  $request->cat_raza;
        $mascota ->cat_tamano =  $request->cat_tamano;
        $mascota ->url_imagen_mascota ='perro.jpg';
        $mascota ->observaciones = $request->observaciones;
        $mascota -> tx_fecha  =$now;
        $mascota -> tx_id  =Auth::user()->id;
        $mascota ->  tx_host   ='0.0.0.0';


        $mascota ->save();
        return redirect()->route('mascotas.index')
            ->with('info','La mascota fue actualizado');

    }
    public function update(MascotaRequest $request, $id)
    {$now = new \DateTime();
        $now->format('d-m-Y H:i:s');
        $now = new \DateTime();
        $mascota = Mascota::find($id);
        $mascota ->nombre_mascota = $request->nombre_mascota;
        $mascota ->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota ->genero = $request->genero;
        //raza
        $mascota ->cat_raza = $request->cat_raza;
        $mascota ->cat_tamano =  $request->cat_tamano;
        $mascota ->url_imagen_mascota ='www....';
        $mascota ->observaciones = $request->observaciones;

        $mascota-> tx_fecha  =$now;
        $mascota->  tx_id  =Auth::user()->id;
        $mascota->  tx_host   ='0.0.0.0';
        $mascota->save();
        return redirect()->route('mascotas.index')
            ->with('info','La mascota fue actualizado');
    }
    public function edit($id)
    {
        $mascota = Mascota::find($id);
        $items = item:: items1(3); //raza
        $items2 = item:: items1(4); //tamano
        return view('mascotas.edit'
            ,compact('mascota')
            ,compact('items' ,'items2'));
    }
    public function create()
    {
       // $items = item::pluck('nombre','id');
        $items = item:: items1(3); //raza
        $items2 = item:: items1(4); //tamano

        return view('mascotas.create'

            ,compact('items' ,'items2'));
    }
    public function destroy($id)
    {
        $mascota = Mascota::find($id);
        $mascota->delete();
        return back()->with('info','La mascota fue eliminado logicamente');
    }
}
