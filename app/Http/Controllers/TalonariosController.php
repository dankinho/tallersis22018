<?php

namespace App\Http\Controllers;

use App\Talonario;
use Illuminate\Http\Request;

class TalonariosController extends Controller
{
    public function  index()
    {
        $talonarios = Talonario::orderBy('id','DESC')->paginate();


        return view('talonarios.index', compact('talonarios'));

    }
    public function show($id)
    {
        $talonario = Talonario::find($id);

        return view('talonarios.show', compact('talonario'));
    }
}
