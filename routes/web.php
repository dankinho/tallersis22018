<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', function(){
    $config = array();
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

    app('map')->initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
    $marker = array();
    app('map')->add_marker($marker);

    $map = app('map')->create_map();
    echo "<html><head><script type='text/javascript'>var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";

});

Route::resource('empresas','EmpresasController');
Route::resource('talonarios','TalonariosController');
Route::resource('reservas','Reservas_serviciosController');
Route::resource('servicios','abmservicios');
Route::resource('clientes','ClienteController');
Route::get('/listacliente','abmservicios@listaclientes');

Route::resource('/altas','abmservicios');
Route::get('/adquirir', 'abmservicios@adquirir');
Route::get('/adquirir1', 'abmservicios@adquirir1');
Route::resource('mascotas','MascotaController');


Route::resource('/cuidador', 'CuidadorController');
Route::get('/cuid/vista', array('as' => 'cuidador.vista', 'uses' => 'CuidadorController@vista'));
Route::get('/cuid/vista2', array('as' => 'cuidador.vista2', 'uses' => 'CuidadorController@vista2'));
Route::resource('/comentario', 'ComentarioController');
Route::resource('/comentario2', 'Comentario2Controller');

Route::resource('/comentarios', 'ServicioMascotaComentariosController');



Route::resource('serviciosMascotas','ServiciosMascotaController');
Route::get('items1/{id}','ItemController@itemsCatalogos');
Route::get('showitem/{id}',  'ItemController@itemsshow');
Route::get('eliminaritem/{id}',  'abmservicios@eliminar');
Route::get('editar/{id}',  'abmservicios@edit');
Route::get('visualserv/{id}',  'abmservicios@visualizar');
Route::post('ruta','abmservicios@update');
Route::get('formulario', 'StorageController@index');
Route::post('storage/create', 'StorageController@save');
Route::get('storage/{archivo}', function ($archivo) {
    $public_path = public_path();
    $url = $public_path.'/storage/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});
Route::get("upload", function(){
    return View::make("upload");
});

Route::post("upload", function(){
    $file = Input::file("photo");
    $dataUpload = array(
         "photo" => $file//campo foto para validar
    );
    //guardamos la imagen en public/imgs con el nombre original
    $file->move("imgs",$file->getClientOriginalName());
    //redirigimos con un mensaje flash
    return Redirect::to('upload')->with(array('confirm' => 'Te has registrado correctamente.'));

});