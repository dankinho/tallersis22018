<?php

namespace App\Http\Controllers;
//https://styde.net/sistema-de-archivos-y-almacenamiento-en-laravel-5/
use Illuminate\Http\Request;
use Image;
class StorageController extends Controller
{
    public function index()
    {
     //   return view::make('new');
        return view('new' );

    }
    public function save(Request $request)
    {

        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        return $file;
    }
    public function store(Request $request)
    {
        // ruta de las imagenes guardadas
        $ruta = public_path().'/img/';

        // recogida del form
        $imagenOriginal = $request->file('avatar');

        // crear instancia de imagen
        $imagen = Image::make($imagenOriginal);

        // generar un nombre aleatorio para la imagen
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();

        $imagen->resize(300,300);

        // guardar imagen
        // save( [ruta], [calidad])
        $imagen->save($ruta . $temp_name, 100);


        $personaje = new Personaje;
        $personaje->filename = $temp_name;
        $personaje->save();

        return redirect('personajes/create');
    }

    protected function random_string()
    {
        $key = '';
        $keys = array_merge( range('a','z'), range(0,9) );

        for($i=0; $i<10; $i++)
        {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

}
