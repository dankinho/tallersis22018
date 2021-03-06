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
Route::get('/cuid/chatlist', array('as' => 'cuidador.chatlista', 'uses' => 'CuidadorController@chatlista'));
Route::resource('/comentario', 'ComentarioController');
Route::resource('/comentario2', 'Comentario2Controller');
Route::post('/chat', array('as'=>'cuidador.chat', 'uses'=>'CuidadorController@chat'));
Route::post('/chatcr', array('as'=>'cuidador.chatcr', 'uses'=>'CuidadorController@chatcr'));
Route::post('/chatcr2', array('as'=>'cuidador.chatcr2', 'uses'=>'CuidadorController@chatcr2'));

Route::resource('comentarios', 'ServicioMascotaComentariosController');
Route::resource('cancelaciones', 'CancelacionServiciosMascotaController');

Route::resource('serviciosMascotas','ServiciosMascotaController');
Route::get('serviciosMascotas/buscar', 'ServiciosMascotaController@busqueda');
Route::get('serviciosMascotas/comentar', ['as' => 'index', 'uses' => 'ServicioMascotaComentariosController@index']);
Route::get('items1/{id}','ItemController@itemsCatalogos');
Route::get('showitem/{id}',  'ItemController@itemsshow');
Route::get('eliminaritem/{id}',  'abmservicios@eliminar');
Route::get('editar/{id}',  'abmservicios@edit');
Route::get('visualserv/{id}',  'abmservicios@visualizar');
Route::post('ruta','abmservicios@update');
Route::get('formulario', 'StorageController@index');
Route::post('storage/create', 'MascotaController@save');
Route::post('confirmaralojamiento/{id}', 'abmservicios@confalojamiento');
Route::get('events','EventsController@showEvents');

Route::post('guardserv', 'abmservicios@guardserv');
Route::post('fec', 'abmservicios@fec');