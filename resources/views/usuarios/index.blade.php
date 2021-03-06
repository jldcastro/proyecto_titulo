@extends('layouts.administrador-base')
@section('titulo','Lista Usuarios')
@section('contenido')
    <div class="row">
        <div class="col-md-10">
            @if(Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible">
                    {{Session::get('mensaje')}}
                </div>
            @endif

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Usuarios</h3>
                </div>

                {!!Form::open(['route' => 'usuario.index','method' => 'GET', 'class' => 'navbar-form pull-left' ])!!}
                    <div class = "input-group">
                        <div class="input-group-addon" id="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        {!!Form::text('codigo_usuario',null,['class'=>'form-control', 'placeholder' => 'Buscar usuario', 'ariadescribedby' => 'search'])!!}
                    </div>
                {!!Form::close()!!}
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Código</th>
                            <th>Nombres</th>
                            <th>Apellido Paterno</th>
                            <th>Rut</th>
                            <th>Opciones</th>
                        </tr>
                        <tr>
                            @foreach($usuarios as $usuario)
                            <td>{{$usuario->codigo_usuario}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->apellido_paterno}}</td>
                            <td>{{$usuario->rut_usuario}}</td>
                            <td><button class=".btn-flat btn-success"><i class="fa fa-pencil-square-o"></i><a href="usuario/{{$usuario->id}}/edit" style="color: #ffffff">Actualizar</a></button></td>
                            <td><button class=".btn-flat btn-warning"><i class="fa fa-eye"></i><a href="usuario/{{$usuario->id}}" style="color: #ffffff">Detalles</a></button></td>
                            <td><button class=".btn-flat btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-remove"></i><a style="color: #ffffff">Eliminar</a></button></td>
                        </tr>
                           @endforeach
                    </table>
                    {!!$usuarios->render()!!}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">¿Desea realmente eliminar este usuario?</h4>
                </div>
                <div class="modal-body">
                    <div class="">¿Está seguro?</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        {!! Form::open(['route' =>['usuario.destroy',$usuario->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
                            {!!Form::button('<i class="fa fa-remove"></i>Eliminar',['class' => '.btn-flat btn-danger', 'role' => 'button','type' => 'submit', 'data-toggle' => 'modal', 'data-target' => '#myModal'])!!}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
