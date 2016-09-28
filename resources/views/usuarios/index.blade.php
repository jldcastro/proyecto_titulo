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
                            <td><button class=".btn-flat btn-warning"><i class="fa fa-eye"></i>Detalles</button></td>

                            <td>
                                {!!Form::open(['route' =>['usuario.destroy',$usuario->id], 'method'=>'DELETE'])!!}
                                    {!!Form::button('<i class="fa fa-remove"></i>Eliminar',['class' => '.btn-flat btn-danger', 'role' => 'button','type' => 'submit'])!!}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                            @endforeach
                    </table>
                    {!!$usuarios->render()!!}
                </div>
            </div>
        </div>
    </div>
@stop
