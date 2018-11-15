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

Route::resource('altas','altascontroller');

Route::resource('mascotas','MascotaController');


Route::resource('/cuidador', 'CuidadorController');


Route::resource('serviciosMascotas','ServiciosMascotaController');
Route::get('items1/{id}','ItemController@itemsCatalogos');
Route::get('showitem/{id}',  'ItemController@itemsshow');
