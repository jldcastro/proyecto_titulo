<?php

namespace Calibracion\Http\Controllers;

use Illuminate\Http\Request;
use Calibracion\Http\Requests\UsuarioCreateRequest;
use Calibracion\Http\Requests\UsuarioUpdateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Calibracion\User;
use Calibracion\Perfil;
use Calibracion\Http\Requests;
use Calibracion\Http\Controllers\Controller;
use Storage;
use File;

class UsuarioController extends Controller
{
    public function __construct()
    {

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

    public function pagina_usuario($id)
    {
        $usuario = User::find($id);
        return view('usuarios.vendedor', ['usuario' => $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_usuarios = Perfil::lists('tipo_usuario','id');

        return view('usuarios.create',compact('id','tipo_usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        User::create($request->all());
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
    public function update( UsuarioUpdateRequest $request, $id)
    {

        $usuario = User::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect('/usuario')->with('mensaje', 'Se guardaron los cambios exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        Session::flash('mensaje','El usuario fue eliminado exitosamente');
        return Redirect::to('/usuario');

    }
}
