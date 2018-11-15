<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\DatosServicio;

class CuidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('cuidador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $serv = $request['serv'];
        $titulo = $request['titulo'];
        $desc = $request['desc'];
        $casa = $request['casa'];
        $zona = $request['zona'];
        $sup = $request['sup'];
        $longitud = $request['longitud'];
        $latitud = $request['latitud'];
        $altitud = $request['altitud'];
        $perro = $request['perro'];
        $alojamiento = $request['alojamiento'];
        $paseo = $request['paseo'];
        $com = $request['id_comision'];
        $datserv = $request['id_datos_servicio'];
        $catid = $request['cat_id_tipo_servicio'];
        $catidest = $request['cat_id_estado_servicio'];
        $txf = $request['tx_fecha'];
        $txid = $request['tx_id'];
        $txhost = $request['tx_host'];
        $tipo_casa = $request['tipo_casa'];
        $tipo_campo = $request['tipo_campo'];
        $direc = $request['direc'];
        $existcamp = $request['existcamp'];
        $cantperro = $request['cantperro'];
        $servicios = new Servicio;
        $datosservicio = new DatosServicio;
        $servicios->titulo = $titulo;
        $servicios->descripcion = $desc;
        $servicios->precio_paseo = $paseo;
        $servicios->precio_alojamiento = $alojamiento;
        $servicios->id_comision = $com;
        $servicios->id_datos_servicio = $datserv;
        $servicios->cat_id_tipo_servicio = $catid;
        $servicios->cat_id_estado_servicio = $catidest;
        $servicios->tx_fecha = $txf;
        $servicios->tx_id = $txid;
        $servicios->tx_host = $txhost;
        $datosservicio->existencia_perro_casa = $perro;
        $datosservicio->coor_longitud = $longitud;
        $datosservicio->coor_latitud = $latitud;
        $datosservicio->coor_altitud = $altitud;
        $datosservicio->tamano_campo_exterior = $sup;
        $datosservicio->cat_id_tipo_casa = $tipo_casa;
        $datosservicio->cat_id_tipo_campo_exterior = $tipo_campo;
        $datosservicio->direccion_calle = $direc;
        $datosservicio->existencia_campo_exterior = $existcamp;
        $datosservicio->cant_perro_casa = $cantperro;
        $datosservicio->tx_fecha = $txf;
        $datosservicio->tx_id = $txid;
        $datosservicio->tx_host = $txhost;
        $servicios->save();
        $datosservicio->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
