<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComentarioAlojamiento;
use App\ComentarioPaseo;
use App\Servicio;

class ComentarioController extends Controller
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
        //
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
        $nombre = $request['nombre'];
        $coment = $request['coment'];
        $comenta = new ComentarioAlojamiento;
        $comenta->nombre = $nombre;
        $comenta->comentario = $coment;
        $comenta->save();
        $numal = ComentarioAlojamiento::count();
        $obs = ComentarioAlojamiento::all();
        $num3 = Servicio::count();
        $cuid3 = Servicio::all();
        return view('cuidador.vista', ['num2'=>$numal, 'cuid2'=>$obs, 'num'=>$num3, 'cuid'=>$cuid3]);
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
