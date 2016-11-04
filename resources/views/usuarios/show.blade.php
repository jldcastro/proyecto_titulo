@extends('layouts.administrador-base')
@section('titulo','Detalles Usuario')
@section('contenido')

<div class="row">
        <div class="col-md-10">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Detalles Usuario</h3>
                </div>

                        <div class = "form-group has-feedback">
                            <label>Imagen perfil usuario</label>
                            <br>
                            <img src="{{asset('imagenes/usuarios/'.$usuario->foto)}}" width="150px">
                        </div>

                        <div class = "form-group has-feedback">
                            <label>Código</label>
                            <input type="text" class="form-control" value="{{$usuario->codigo_usuario}}" disabled>
                        </div>

                        <div class = "form-group has-feedback">
                            <label>Nombres</label>
                            <input type="text" class = "form-control" value="{{$usuario->name}}" disabled>
                        </div>

                        <div class = "form-group has-feedback">
                            <label>Correo Electrónico</label>
                                <input type="text" class = "form-control" value="{{$usuario->email}}" disabled>
                        </div>

                        <div class = "form-group has-feedback">
                            <label>Apellido Paterno</label>
                            <input type="text" class = "form-control" value="{{$usuario->apellido_paterno}}" disabled>
                        </div>

                        <div class = "form-group has-feedback">
                            <label>Apellido Materno</label>
                            <input type="text" class = "form-control" value="{{$usuario->apellido_materno}}" disabled>
                        </div>

                        <div class = "form-group has-feedback">
                            <label>Rut</label>
                            <input type="text" class = "form-control" value="{{$usuario->rut_usuario}}" disabled>
                        </div>

                        <div class = "form-group has-feedback">
                            <label>Tipo usuario</label>
                            <input type="text" class = "form-control" value="{!! $usuario->perfil->tipo_usuario !!}" disabled>
                        </div>
                </div>
        </div>
    </div>
@stop