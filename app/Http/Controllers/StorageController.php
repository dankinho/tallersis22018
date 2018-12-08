<?php

namespace App\Http\Controllers;
//https://styde.net/sistema-de-archivos-y-almacenamiento-en-laravel-5/
use Illuminate\Http\Request;

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
}
