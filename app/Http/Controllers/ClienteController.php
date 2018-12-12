<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ClienteRequest;
class ClienteController extends Controller
{

    public function  index()
    {
        return view('clientes.index' );

    }

    public function store(ClienteRequest $request)
    {
        $now = new \DateTime();
        $now->format('d-m-Y H:i:s');

        $mascota = new Cliente ;
        $mascota ->id_usuarios =Auth::user()->id;
        $mascota ->nombre_cliente = $request->nombre_cliente;
        $mascota ->apellido_cliente = $request->apellido_cliente;
        $mascota ->cat_id_tipo_identidad = $request->cat_id_tipo_identidad;
        $mascota ->num_doc_identidad =  $request->num_doc_identidad;
        $mascota ->genero_cliente =  $request->genero_cliente;
        $mascota ->direccion_casa =$request->direccion_casa;
        $mascota ->direccion_numero_casa = $request->direccion_numero_casa;
        $mascota ->estado_usuario = true;
        $mascota ->cat_macrodistrito = $request->cat_macrodistrito;
        $mascota -> tx_fecha  =$now;
        $mascota -> tx_id  =Auth::user()->id;
        $mascota ->  tx_host   ='0.0.0.0';


        $mascota ->save();
        return redirect()->route('home');

    }

}
