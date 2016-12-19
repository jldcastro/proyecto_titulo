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
                        {!!Form::model($usuario,['route' => ['usuario.update',$usuario->id], 'method' => 'PUT', 'files' => true])!!}

                            <div class = "form-group has-feedback">
                                {!!Form::label('name','Nombres*')!!}
                                {!!Form::text('name',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('email', 'Correo Electrónico*')!!}
                                {!!Form::text('email',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('apellido_paterno', 'Apellido Paterno')!!}
                                {!!Form::text('apellido_paterno',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('apellido_materno','Apellido Materno')!!}
                                {!!Form::text('apellido_materno',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                <label>Imagen perfil usuario</label>
                                <br>
                                <img src="{{asset('imagenes/usuarios/'.$usuario->foto)}}" width="200px">
                            </div>

                            <div class="form-group has-feedback">
                                {!! Form::label('foto', 'Imagen perfil usuario') !!}
                            	{!! Form::file('foto') !!}
                            </div>

                            <div class="form-group has-feedback">
                                {!!Form::submit('Actualizar',['class' =>'.btn-flat btn-primary'])!!}
                            </div>
                        {!!Form::close()!!}
                </div>
            </div>
        </div>
@stop