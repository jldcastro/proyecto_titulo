@extends('layouts.administrador-base')
@section('titulo','Editar Usuario')
@section('contenido')
    <div class="row">
            <div class="col-md-10">
                <div class="box box-primary col-xs-12">
                    <div class="box-header">
                        <h3 class="box-title">Actualizar datos Usuario</h3>
                    </div>
                        @if(count($errors)>0)
                            <div class="alert alert-danger alert-dismissible">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{!!$error!!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!!Form::model($usuario,['route' => ['usuario.update',$usuario->id], 'method' => 'PUT'])!!}
                            <div class="box-body col-xs-12">

                            </div>
                            <div class = "form-group has-feedback">
                                {!!Form::label('Código')!!}
                                {!!Form::text('codigo_usuario',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('Nombres*')!!}
                                {!!Form::text('name',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('Correo Electrónico*')!!}
                                {!!Form::text('email',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('Apellido Paterno')!!}
                                {!!Form::text('apellido_paterno',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('Apellido Materno')!!}
                                {!!Form::text('apellido_materno',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('Rut')!!}
                                {!!Form::text('rut_usuario',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                <h5>Tipo de usuario</h5>
                                {!!Form::radio('tipo_usuario','administrador')!!}Administrador&nbsp;&nbsp;
                                {!!Form::radio('tipo_usuario','metrologo')!!}Metrólogo&nbsp;&nbsp;
                                {!!Form::radio('tipo_usuario','vendedor')!!}Vendedor&nbsp;&nbsp;
                            </div>
                            <div class="form-group has-feedback">
                                {!!Form::submit('Actualizar',['class' =>'.btn-flat btn-primary'])!!}
                            </div>
                        {!!Form::close()!!}
                </div>
            </div>
        </div>
@stop