<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\DatosServicio;
use App\ComentarioAlojamiento;
use App\ComentarioPaseo;
use App\User;
use Auth;
use Chat;

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
        $num2 = Servicio::count();
        $cuid2 = Servicio::all();
            return view('cuidador.create', ['num'=>$num2, 'cuid'=>$cuid2]);
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
        $servicios->tipo_serv = $serv;
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
        echo Servicio::where('id', 4)->get();
        if(Servicio::where('id', 3)->get()!='[]') {
            if (Servicio::where('id', 4)->get() == '[]') {
                $servicios->id = 4;
                $servicios->save();
            }
        }
        else $servicios->save();
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
        //gg
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
        $servicio = Servicio::where('tipo_serv', $id);
        $servicio->delete();
        Servicio::onlyTrashed()->where('tipo_serv', $id)->forceDelete();
        if(Servicio::where('id', 4))
        {
            Servicio::where('id', 4)->update(['id'=>3]);

        }
        return redirect('/home');


    }

    public function vista()
    {
        $num3 = Servicio::count();
        $cuid3 = Servicio::all();
        $numal = ComentarioAlojamiento::count();
        $obs = ComentarioAlojamiento::all();
        return view('cuidador.vista', ['num2'=>$numal, 'cuid2'=>$obs, 'num'=>$num3, 'cuid'=>$cuid3]);
    }

    public function vista2()
    {
        $num4 = Servicio::count();
        $cuid4 = Servicio::all();
        $numal = ComentarioPaseo::count();
        $obs = ComentarioPaseo::all();
        return view('cuidador.vista2', ['num2'=>$numal, 'cuid2'=>$obs, 'num'=>$num4, 'cuid'=>$cuid4]);
    }

    public function com(Request $request)
    {
        $nombre = $request['nombre'];
        $coment = $request['coment'];
        $comenta = new ComentarioAlojamiento;
        $comenta->nombre = $nombre;
        $comenta->comentario = $coment;
        $comenta->save();
        $num2 = ComentarioAlojamiento::count();
        $obs = ComentarioAlojamiento::all();
        return view('cuidador.vista', ['num'=>$num2, 'cuid'=>$obs]);
    }

    public function com2(Request $request)
    {
        $nombre = $request['nombre'];
        $coment = $request['coment'];
        $comenta = new ComentarioPaseo;
        $comenta->nombre = $nombre;
        $comenta->comentario = $coment;
        $comenta->save();
        $num2 = ComentarioPaseo::count();
        $obs = ComentarioPaseo::all();
        return view('cuidador.vista2', ['num'=>$num2, 'cuid'=>$obs]);
    }

    public function chatlista()
    {
        $usuc = User::count();
        $usu = User::all();
        return view('cuidador.chatlista', ['usu'=>$usu, 'usuc'=>$usuc]);
    }

    public function chat(Request $request)
    {
        $i = Auth::user()->id;
        $i2 = $request['id2'];
        $participants = [$i, $i2];
        $conversation = Chat::createConversation($participants);
        $messagew = Chat::conversation($conversation)->for(auth()->user())->getMessages();
        return view('cuidador.chat', ['conv'=>$conversation, 'messw'=>$messagew]);
    }

    public function chatcr(Request $request)
    {
        $conversation = Chat::conversations()->getById($request['id']);
        $message = Chat::message($request['message'])
            ->from(auth()->user())
            ->to($conversation)
            ->send();
        $conversation2 = Chat::conversation($conversation)->for(auth()->user())->getMessages();
        return view('cuidador.chat', ['conv'=>$conversation, 'messw'=>$conversation2]);
    }
}
