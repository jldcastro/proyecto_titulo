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

Route::get('usuarios/{foto}',function($foto = null)
{
    $url = public_path() . "/imagenes/usuarios/{$foto}";
    if(file_exists($url))
    {
        return Response::download($url);
    }
});

Route::resource('/equipo','EquipoController');

Route::resource('/login','LoginController');

Route::get('logout','LoginController@logout');