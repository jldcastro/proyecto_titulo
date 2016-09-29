@extends('layouts.administrador-base')
@section('titulo','Bienvenido')
@section('contenido')
    @if(Session::has('mensaje-errores'))
        <div class="alert alert-danger alert-dismissible">
            {{Session::get('mensaje-errores')}}
        </div>
    @endif
@stop