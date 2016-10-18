<?php

namespace Calibracion\Http\Controllers;

use Illuminate\Http\Request;
use Calibracion\Http\Requests\UsuarioCreateRequest;
use Calibracion\Http\Requests\UsuarioUpdateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Calibracion\User;
use Calibracion\Http\Requests;
use Calibracion\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('administrador');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = User::search($request->codigo_usuario)->paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        User::create([
            'codigo_usuario' => $request['codigo_usuario'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'apellido_paterno' => $request['apellido_paterno'],
            'apellido_materno' => $request['apellido_materno'],
            'rut_usuario' => $request['rut_usuario'],
            'tipo_usuario' => $request['tipo_usuario']
        ]);
        return redirect('/usuario')->with('mensaje', 'Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UsuarioUpdateRequest $request)
    {
        $usuario = User::find($id);
        $usuario->fill($request->all());
        $usuario->save();

        Session::flash('mensaje','Se guardaron los cambios exitosamente');
        return Redirect::to('/usuario');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('mensaje','El usuario fue eliminado exitosamente');
        return Redirect::to('/usuario');

    }
}
