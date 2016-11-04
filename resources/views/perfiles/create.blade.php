@extends('layouts.administrador-base')
@section('titulo','Crear Tipo de Usuario')
@section('contenido')

    <div class="row">
        <div class="col-md-10">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Ingresar Nuevo Tipo de Usuario</h3>
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

                    {!!Form::open(['route' => 'perfil.store','method' => 'POST' ])!!}

                        <div class = "form-group has-feedback">
                            {!!Form::label('Tipo de usuario')!!}
                            {!!Form::text('tipo_usuario',null,['class'=>'form-control','required'])!!}
                        </div>

                        <div class="form-group has-feedback">
                            {!!Form::submit('Registrar',['class' =>'.btn btn-primary'])!!}
                        </div>

                    {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop