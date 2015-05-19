<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

//Modulo de Administracion
Route::get('administracion-tipoidentificacion','TipoIdentificacionController@index');
Route::get('administracion-tipoidentificacion-crear','TipoIdentificacionController@crearTipoIdentificacion');
Route::get('administracion-tipoidentificacion-modificar','TipoIdentificacionController@modificarTipoIdentificacion');
Route::get('administracion-tipoidentificacion-eliminar','TipoIdentificacionController@eliminarTipoIdentificacion');
Route::get('administracion-tipoidentificacion-listar','TipoIdentificacionController@listarTipoIdentificacion');

Route::get('administracion-actividadeconomica','ActividadEconomicaController@index');
Route::get('administracion-actividadeconomica-crear','ActividadEconomicaController@crearActividadEconomica');
Route::get('administracion-actividadeconomica-modificar','ActividadEconomicaController@modificarActividadEconomica');
Route::get('administracion-actividadeconomica-eliminar','ActividadEconomicaController@eliminarActividadEconomica');
Route::get('administracion-actividadeconomica-listar','ActividadEconomicaController@listarActividadEconomica');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
