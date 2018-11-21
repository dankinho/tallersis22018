<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class abmservicios extends Controller
{

    function index (Request $request)
    {
        $servicios = Servicio::orderBy('id','DESC')->paginate();


        return view('Servicios_abm.index', compact('servicios'));

    }
}
