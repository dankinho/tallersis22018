<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mascota;
use App\Servicio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $num = Servicio::count();
        $cuid = Servicio::all();
        return view('home', ['num'=>$num, 'cuid'=>$cuid]);
    }
}
