@extends('layouts.administrador-base')
@section('titulo','Crear Equipo')
@section('contenido')

    <div class="row">
        <div class="col-md-10">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Ingresar Nuevo Equipo</h3>
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
                            {!!Form::label('Nombre')!!}
                            {!!Form::text('nombre_equipo',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Marca')!!}
                            {!!Form::text('marca_equipo',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('Modelo')!!}
                            {!!Form::text('modelo_equipo',null,['class'=>'form-control'])!!}
                        </div>



                        <div class="form-group has-feedback">
                            {!!Form::submit('Registrar',['class' =>'.btn btn-primary'])!!}
                        </div>

                    {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop