@extends('layouts.administrador-base')
@section('titulo','Crear Usuarios')
@section('contenido')

    <div class="row">
        <div class="col-md-10">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Ingresar Nuevo Usuario</h3>
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

                    {!!Form::open(['route' => 'usuario.store','method' => 'POST', 'files' => true ])!!}

                        <div class = "form-group has-feedback">
                            {!!Form::label('Código')!!}
                            {!!Form::text('codigo_usuario',null,['class'=>'form-control','required'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Nombres*')!!}
                            {!!Form::text('name',null,['class'=>'form-control','required'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Correo Electrónico*')!!}
                            {!!Form::text('email',null,['class'=>'form-control','required'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Contraseña*')!!}
                            {!!Form::password('password',['class'=>'form-control','required'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Confirmar Contraseña*')!!}
                            {!!Form::password('password_confirmation',['class'=>'form-control','required'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Apellido Paterno')!!}
                            {!!Form::text('apellido_paterno',null,['class'=>'form-control','required'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Apellido Materno')!!}
                            {!!Form::text('apellido_materno',null,['class'=>'form-control','required'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Rut')!!}
                            {!!Form::text('rut_usuario',null,['class'=>'form-control','required'])!!}
                        </div>

                        <div class="form-group has-feedback">
			                {!! Form::label('foto', 'Imagen perfil usuario') !!}
			                {!! Form::file('foto') !!}
		                </div>

		                <div class ="form-group has-feedback">
		                    {!! Form::label('perfil_id', 'Tipo de usuario') !!}
		                    {!! Form::select('perfil_id', $tipo_usuarios ,null, ['placeholder' => 'Seleccione el tipo de usuario', 'class' => 'form-control','required']) !!}
		                </div>

                        <div class="form-group has-feedback">
                            {!!Form::submit('Registrar',['class' =>'.btn btn-primary'],['class' => 'form-control'])!!}
                        </div>

                    {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop