<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Mascota;
=======
use App\Servicio;

>>>>>>> 3f36fe1b89481b4e7f0720536cbe2379c7157d0f
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
<<<<<<< HEAD

        return view('home' );

=======
        $num = Servicio::count();
        $cuid = Servicio::all();
        return view('home', ['num'=>$num, 'cuid'=>$cuid]);
>>>>>>> 3f36fe1b89481b4e7f0720536cbe2379c7157d0f
    }
}
