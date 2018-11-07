<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reservas_serviciosController extends Controller
{
    function index (Request $request)
    {
        return view('Reservas_servicios.index');
    }
}
