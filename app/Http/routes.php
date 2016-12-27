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

Route::get('/administrador','AdministradorController@index');

Route::resource('/usuario','UsuarioController');

Route::resource('/perfil','PerfilController');

Route::resource('/contraseña','ContrasenaController');

Route::resource('/equipo','EquipoController');

Route::get('/equipo/word/{id}','EquipoController@word');

Route::resource('/login','LoginController');

Route::get('logout','LoginController@logout');



