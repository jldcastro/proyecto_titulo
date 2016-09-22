@extends('layouts.administrador-base')
@section('titulo','Crear Usuarios')
@section('contenido')

        <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Ingresar Nuevo Usuario</h3>
                </div><!-- /.box-header -->

                <form  method="post"  role = "form" action="{{ url('/usuario') }}" class="form-horizontal" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="box-body col-xs-12">

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="codigo_usuario">Código</label>
                            <input type="text" class="form-control" id="codigo_usuario" name="codigo_usuario">
                            <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="name">Nombres*</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="email">Correo Electrónico*</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="password">Contraseña*</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="password_confirmation">Confirmar Contraseña*</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="apellido_paterno">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="apellido_materno">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellido_materno" name="apellido_materno">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="rut_usuario">Rut</label>
                            <input type="text" class="form-control" id="rut_usuario" name="rut_usuario">
                            <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                        </div>

                        <div class="form-group col-xs-7 has-feedback">
                            <label for="tipo_usuario">Tipo de Usuario</label><br>
                            <label class="radio-inline"><input type="radio" name="tipo_usuario" value="administrador">Administrador</label>
                            <label class="radio-inline"><input type="radio" name="tipo_usuario" value="metrologo">Metrólogo</label>
                            <label class="radio-inline"><input type="radio" name="tipo_usuario" value="vendedor">Vendedor</label>
                        </div>

                        <div class="col-xs-12 ">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>
        </div>
@stop