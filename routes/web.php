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

Route::resource('empresas','EmpresasController');
Route::resource('talonarios','TalonariosController');
Route::resource('reservas','Reservas_serviciosController');
Route::resource('servicios','abmservicios');

Route::resource('/altas','abmservicios');

Route::resource('mascotas','MascotaController');


Route::resource('/cuidador', 'CuidadorController');
Route::get('/cuid/vista', array('as' => 'cuidador.vista', 'uses' => 'CuidadorController@vista'));
Route::get('/cuid/vista2', array('as' => 'cuidador.vista2', 'uses' => 'CuidadorController@vista2'));
Route::post('/cuid/com', array('as' => 'cuidador.com', 'uses' => 'CuidadorController@com'));
Route::post('/cuid/com2', array('as' => 'cuidador.com2', 'uses' => 'CuidadorController@com2'));


Route::resource('serviciosMascotas','ServiciosMascotaController');
Route::get('items1/{id}','ItemController@itemsCatalogos');
Route::get('showitem/{id}',  'ItemController@itemsshow');
Route::get('eliminaritem/{id}',  'abmservicios@eliminar');
Route::get('editar/{id}',  'abmservicios@edit');
Route::post('ruta','abmservicios@update');
//sdfsd