<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
class EmpresasController extends Controller
{
    public function  index()
    {
        $empresas = Empresa::orderBy('id','DESC')->paginate();

            return view('empresas.index', compact('empresas'));
    }
    public function show($id)
    {
        $empresas =  Empresa::find($id);

        return view('empresas.show', compact('empresas'));
    }
}
