@extends('layouts.administrador-base')
@section('titulo','Detalles Equipo')
@section('contenido')

    <div class="row">
        <div class="col-md-10">
            <div class="box box-primary col-xs-12">
                <div class="box-header">
                    <h3 class="box-title">Detalles Equipo Empresa</h3>
                </div>

                    <div class = "form-group has-feedback">
                        <label>Nombre</label>
                        <input type="text" class="form-control" value="{{$equipo->equipo}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Marca/Modelo</label>
                        <input type="text" class = "form-control" value="{{$equipo->marca_modelo}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Número de serie</label>
                        <input type="text" class = "form-control" value="{{$equipo->nserie}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Código interno</label>
                        <input type="text" class = "form-control" value="{{$equipo->cod_interno}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Capacidad</label>
                        <input type="text" class = "form-control" value="{{$equipo->capacidad}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Clase OIML</label>
                        <input type="text" class = "form-control" value="{{$equipo->clase_oiml}}" disabled>
                        </div>

                    <div class = "form-group has-feedback">
                        <label>Error Máximo</label>
                        <input type="text" class = "form-control" value="{{$equipo->error_max}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Lugar Almacenamiento</label>
                        <input type="text" class = "form-control" value="{{$equipo->lugar_almacenamiento}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Fecha de compra</label>
                        <input type="date" class = "form-control" value="{{$equipo->fcompra}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Número de orden de compra</label>
                        <input type="text" class = "form-control" value="{{$equipo->norden_compra}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Proveedor</label>
                        <input type="text" class = "form-control" value="{{$equipo->proveedor}}" disabled>
                    </div>

                    <div class = "form-group has-feedback">
                        <label>Intervalo de mantenimiento</label>
                        <input type="text" class = "form-control" value="{{$equipo->i_mantenimiento}}" disabled>
                    </div>
                </div>
        </div>
    </div>
@stop