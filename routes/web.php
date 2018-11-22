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

Route::resource('/altas','abmservicios');

Route::resource('mascotas','MascotaController');


Route::resource('/cuidador', 'CuidadorController');
Route::get('/cuid/vista', array('as' => 'cuidador.vista', 'uses' => 'CuidadorController@vista'));
Route::get('/cuid/vista2', array('as' => 'cuidador.vista2', 'uses' => 'CuidadorController@vista2'));
Route::resource('/comentario', 'ComentarioController');
Route::resource('/comentario2', 'Comentario2Controller');


Route::resource('serviciosMascotas','ServiciosMascotaController');
Route::get('items1/{id}','ItemController@itemsCatalogos');
Route::get('showitem/{id}',  'ItemController@itemsshow');
Route::get('eliminaritem/{id}',  'abmservicios@eliminar');
Route::get('editar/{id}',  'abmservicios@edit');
Route::post('ruta','abmservicios@update');
//sdfsd