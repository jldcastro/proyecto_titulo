@extends('layouts.administrador-base')
@section('titulo','Editar Equipo')
@section('contenido')
    <div class="row">
            <div class="col-md-10">
                <div class="box box-primary col-xs-12">
                    <div class="box-header">
                        <h3 class="box-title">Actualizar datos Equipo</h3>
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
                        {!!Form::model($equipo,['route' => ['equipo.update',$equipo->id], 'method' => 'PUT'])!!}

                            <div class = "form-group has-feedback">
                                {!!Form::label('equipo', 'Equipo')!!}
                                {!!Form::text('equipo',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('marca_modelo', 'Marca/Modelo')!!}
                                {!!Form::text('marca_modelo',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('nserie', 'N° de serie')!!}
                                {!!Form::text('nserie',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('cod_interno', 'Código Interno')!!}
                                {!!Form::text('cod_interno',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('capacidad', 'Capacidad')!!}
                                {!!Form::text('capacidad',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('clase_oiml', 'Clase OIML')!!}
                                {!!Form::text('clase_oiml',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('error_max', 'Error máximo')!!}
                                {!!Form::text('error_max',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('lugar_almacenamiento', 'Lugar de almacenamiento')!!}
                                {!!Form::text('lugar_almacenamiento',null,['class'=>'form-control'])!!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('fcompra', 'Fecha de compra')!!}
                                {!!Form::input('date' ,'fcompra', date('Y-m-d'),['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('norden_compra', 'Número Orden de Compra')!!}
                                {!!Form::text('norden_compra' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('proveedor', 'Proveedor')!!}
                                {!!Form::text('proveedor' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('intervalo_mantenimiento', 'Intervalo de mantenimiento')!!}
                                {!!Form::text('intervalo_mantenimiento' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('fecha_mantenimiento', 'Primer Mantenimiento')!!}
                                {!!Form::input('date' ,'fecha_mantenimiento', date('Y-m-d'),['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('avisar', 'Avisar')!!}
                                {!!Form::text('avisar' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('pauta_mantencion', 'Pauta de mantención')!!}
                                {!!Form::text('pauta_mantencion' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('intervalo_calibracion', 'Intervalo de calibración')!!}
                                {!!Form::text('intervalo_calibracion' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('intervalo_verificacion', 'Intervalo de verificación')!!}
                                {!!Form::text('intervalo_verificacion' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('criterio_aceptacion', 'Criterio de aceptación')!!}
                                {!!Form::text('criterio_aceptacion' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('observaciones', 'Observaciones')!!}
                                {!!Form::textarea('observaciones' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('actividad', 'Actividad')!!}
                                {!!Form::text('actividad' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('f_realizacion', 'Fecha realización')!!}
                                {!!Form::input('date' ,'f_realizacion', date('Y-m-d'),['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('f_proxima', 'Fecha próxima')!!}
                                {!!Form::input('date' ,'f_proxima', date('Y-m-d'),['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('realizado_por', 'Realizado por')!!}
                                {!!Form::text('realizado_por' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('ncertificado', 'N° de certificado')!!}
                                {!!Form::text('ncertificado' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group has-feedback">
                                {!!Form::label('observacion', 'Observación')!!}
                                {!!Form::textarea('observacion' ,null,['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group has-feedback">
                                {!!Form::submit('Actualizar',['class' =>'.btn-flat btn-primary'])!!}
                            </div>
                        {!!Form::close()!!}
                </div>
            </div>
        </div>
@stop