@extends('layouts.administrador-base')
@section('titulo','Crear Equipo')
@section('contenido')

    <div class="row">
        <div class="col-md-10">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Ingresar Nuevo Equipo (Formulario-F4)</h3>
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

                    {!!Form::open(['route' => 'equipo.store','method' => 'POST', 'files' => true ])!!}

                        <div class = "form-group has-feedback">
                            {!!Form::label('equipo', 'Equipo','required')!!}
                            {!!Form::text('equipo',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('marca_modelo', 'Marca/Modelo','required')!!}
                            {!!Form::text('marca_modelo',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('nserie', 'N° de serie','required')!!}
                            {!!Form::text('nserie',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('cod_interno', 'Código Interno','required')!!}
                            {!!Form::text('cod_interno',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('capacidad', 'Capacidad','required')!!}
                            {!!Form::text('capacidad',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('clase_oiml', 'Clase OIML','required')!!}
                            {!!Form::text('clase_oiml',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('error_max', 'Error máximo','required')!!}
                            {!!Form::text('error_max',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('lugar_almacenamiento', 'Lugar de almacenamiento','required')!!}
                            {!!Form::text('lugar_almacenamiento',null,['class'=>'form-control'])!!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('fcompra', 'Fecha de compra','required')!!}
                            {!!Form::input('date' ,'fcompra', date('Y-m-d'),['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('norden_compra', 'Número Orden de Compra','required')!!}
                            {!!Form::text('norden_compra' ,null,['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('proveedor', 'Proveedor','required')!!}
                            {!!Form::text('proveedor' ,null,['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group has-feedback">
                            {!!Form::label('i_mantenimiento', 'Intervalo de mantenimiento','required')!!}
                            {!!Form::text('i_mantenimiento' ,null,['class' => 'form-control']) !!}
                        </div>



                        <div class="form-group has-feedback">
                            {!!Form::submit('Registrar',['class' =>'.btn btn-primary'])!!}
                        </div>

                    {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection

