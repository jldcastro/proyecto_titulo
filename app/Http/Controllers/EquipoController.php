<?php

namespace Calibracion\Http\Controllers;

use Illuminate\Http\Request;

use Calibracion\Http\Requests;
use Calibracion\Http\Controllers\Controller;
use Calibracion\Http\Requests\EquipoCreateRequest;
use Calibracion\Equipo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use PhpOffice\PhpWord\TemplateProcessor;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $equipos = Equipo::Search($request->equipo)->paginate(10);
        return view('equipos.index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Equipo::create($request->all());
        return redirect('/equipo')->with('mensaje', 'El equipo fue agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        return view('equipos.show',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();
        Session::flash('mensaje','El equipo fue eliminado exitosamente');
        return Redirect::to('/equipo');
    }

    public function word($id)
    {
        $templateWord = new TemplateProcessor('F4 - Hoja de vida de equipos.docx');

        $resultado = Equipo::find($id);


        $templateWord->setValue('equipo', $resultado->equipo);
        $templateWord->setValue('marca_modelo', $resultado->marca_modelo);
        $templateWord->setValue('nserie', $resultado->nserie);
        $templateWord->setValue('cod_interno', $resultado->cod_interno);
        $templateWord->setValue('capacidad', $resultado->capacidad);
        $templateWord->setValue('clase_oiml', $resultado->clase_oiml);
        $templateWord->setValue('error_max', $resultado->error_max);
        $templateWord->setValue('lugar_almacenamiento', $resultado->lugar_almacenamiento);
        $templateWord->setValue('fcompra', $resultado->fcompra);
        $templateWord->saveAs('equipo'.$id.'.docx');
        header("Content-Disposition: attachment; Filename='equipo$id.docx'");
        file_put_contents("f4/equipo.$id.docx",$templateWord);
    }
}
