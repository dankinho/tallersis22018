<?php

namespace App\Http\Controllers;

use App\Talonario;
use Illuminate\Http\Request;
use App\Http\Requests\TalonarioRequest;
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

    public function store(TalonarioRequest $request)
    {


        $talonario = new Talonario ;
        $talonario-> id_empresa =1;
        $talonario->dosificacion = $request->dosificacion;
        $talonario->n_autorizacion = $request->n_autorizacion;
        $talonario->leyenda = $request->leyenda;
        $talonario->fecha_limite_emision = 2018-12-05;
        $talonario->estado = true;
        $talonario-> tx_fecha  ='2018-10-05 17:55:08';
        $talonario->  tx_id  ='1';
        $talonario->  tx_host   ='0.0.0.0';
        // $talonario->tx_fecha = $now;
        // $talonario->tx_id    = 1;
        // $talonario->tx_host  = '0.0.0.1';


        $talonario->save();
        return redirect()->route('talonarios.index')
            ->with('info','El talonario fue actualizado');

    }
    public function update(TalonarioRequest $request, $id)
    {$now = new \DateTime();
        $talonario = Talonario::find($id);
       // $talonario-> id_empresa =1;
        $talonario->dosificacion = $request->dosificacion;
        $talonario->n_autorizacion = $request->n_autorizacion;
        $talonario->leyenda = $request->leyenda;
        $talonario->fecha_limite_emision = $request->fecha_limite_emision;
        $talonario->estado = true;
        $talonario-> tx_fecha  ='2018-10-05 17:55:08';
        $talonario->  tx_id  ='1';
        $talonario->  tx_host   ='0.0.0.0';
       // $talonario->tx_fecha = $now;
       // $talonario->tx_id    = 1;
       // $talonario->tx_host  = '0.0.0.1';


        $talonario->save();
        return redirect()->route('talonarios.index')
            ->with('info','El talonario fue actualizado');
    }
    public function edit($id)
    {
        $talonario = Talonario::find($id);

        return view('talonarios.edit', compact('talonario'));
    }
    public function create()
    {
        return view('talonarios.create');
    }

}
