<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class abmservicios extends Controller
{

    function index (Request $request)
    {
        $servicios = Servicio::orderBy('id','ASC')->paginate()
            ->where('cat_id_estado_servicio',22);


        return view('Servicios_abm.index', compact('servicios'));

    }
    public function eliminar ($id)
    {
        $e = Servicio::find($id);
        $e-> cat_id_estado_servicio = 0;
        $e-> save();
        return redirect()->action('abmservicios@index');

    }
    public  function create()
    {
        return view('Servicios_abm.altas');
    }

    public  function store(Request $request)
    {
        $a= new Servicio();
        $a->id_comision = 1;
        $a->id_datos_servicio = 1;
        $a->cat_id_tipo_servicio = 21;
        $a->cat_id_estado_servicio = 22;
        $a->titulo = $request->input('titulo');
        $a->descripcion = $request->input('descripcion');
        $a->precio_paseo = $request->input('precio_paseo');
        $a->precio_alojamiento = $request->input('precio_alojamiento');
        $a->tx_fecha = '2018-10-05 17:55:08';
        $a->tx_id = '1';
        $a->tx_host = '0.0.0.0';
        $a->save();
       //  return $request;
        return redirect()->action('abmservicios@index');  
    }
    public function edit ($id)
    {
        $editar =Servicio::find ($id);
            return view('Servicios_abm.editar' ,compact('editar') );
    }
    public function  update (Request $request)
    {
                     //  Servicio::find($id2)->update($request->all());
                     //  return redirect()->action('abmservicios@index');


                               $id= $request->input('id');
                               $e = Servicio::find($id);
                                $e-> titulo=    $request->input('titulo');
                                    $e-> descripcion=    $request->input('descripcion');
                                        $e-> precio_paseo=    $request->input('precio_paseo');
                                            $e-> precio_alojamiento=    $request->input('precio_alojamiento');
                                $e-> save();
          return redirect()->action('abmservicios@index');
          //afafa
    }

}
