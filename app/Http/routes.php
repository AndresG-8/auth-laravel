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
/*
Route::get('/', function(){
	return view('auth/login');
});*/
//registro
//Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//login e index
Route::resource('/', 'LogController');
//logout
Route::get('logout', 'LogController@logout');

//redirecionado desde el registro o desde el login
Route::resource('admin', 'AdminController');

//con esta funcionan los usuarios
Route::resource('usuario', 'UsuarioController');

//para las peticiones ajax toca crear el archivo que sera usado para ello
/*Route::get('usuarios', 'UsuarioController@listing');*/

Route::resource('chat', 'ChatController');
Route::get('mensajes', 'ChatController@listing');

//seleccionar un avatar o al menos poner uno por defecto >D
Route::resource('avatar', 'AvatarController');