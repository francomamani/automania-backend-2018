<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('authenticate', 'AutenticacionController@authenticate');
Route::post('create-user', 'AutenticacionController@createUser');
//Route::group(['middleware'=>'jwt-auth'], function (){
    //Route::get('user/{token}', 'AutenticacionController@user');
    //Route::resource('users', 'AutenticacionController');
//});

//Route::middleware(['jwt-auth', 'jwt-refresh'])->group(function (){
    Route::get('logout', 'AutenticacionController@logout');
    Route::get('user/{token}', 'AutenticacionController@user');
    Route::put('update_user/{id}', 'AutenticacionController@update');
    Route::get('refresh/{token}', 'AutenticacionController@refreshToken');
    Route::resource('users', 'AutenticacionController',['except' => ['create', 'edit']]);
    Route::resource('administradores', 'AdministradorController',['except' => ['create', 'edit']]);
    Route::resource('servicio_generales', 'ServicioGeneralController',['except' => ['create', 'edit']]);
    Route::resource('choferes', 'ChoferController',['except' => ['create', 'edit']]);
    Route::resource('kilometrajes', 'KilometrajeController',['except' => ['create', 'edit']]);
    Route::resource('vehiculos', 'VehiculoController',['except' => ['create', 'edit']]);
    Route::resource('taller-mecanicos', 'TallerMecanicoController',['except' => ['create', 'edit']]);
    Route::resource('asignacion_vehiculos', 'AsignacionVehiculoController',['except' => ['create', 'edit']]);
    Route::resource('vale_gasolinas', 'ValeGasolinaController',['except' => ['create', 'edit']]);
    Route::resource('mantenimientos', 'MantenimientoController',['except' => ['create', 'edit']]);
    Route::resource('estacion-servicios', 'EstacionServicioController',['except' => ['create', 'edit']]);
    Route::resource('kilometrajes', 'KilometrajeController',['except' => ['create', 'edit']]);
    Route::post('choferes-search', 'ChoferController@search');
    Route::post('choferes-filtrar', 'ChoferController@filtrar');
    Route::post('vehiculos-search', 'VehiculoController@search');
    Route::post('vehiculos-filtrar', 'VehiculoController@filtrar');
    Route::post('kilometrajes-search', 'KilometrajeController@search');
    Route::post('kilometrajes-filtrar', 'KilometrajeController@filtrar');
//});

