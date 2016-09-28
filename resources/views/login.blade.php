@extends('layouts.login-base')
@section('titulo','Iniciar Sesión')
@section('contenido')
    <div class="login-box">
        <div class="login-logo">
            <img src="imagenes/logo.png"/>
        </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesión</p>
        {!!Form::open(['route' => 'login.store','method' =>'POST'])!!}
            <div class="form-group">
                {!!Form::label('email','Correo Electrónico')!!}
                {!!Form::email('email',null,['class' => 'form-control'])!!}
            </div>

            <div class="form-group">
                {!!Form::label('password','Contraseña')!!}
                {!!Form::password('password',['class' => 'form-control'])!!}
            </div>
                {!!Form::button('<i class="fa fa-key"></i>Ingresar',['class' => '.btn-flat btn-primary', 'role' => 'button','type' => 'submit'])!!}
        {!!Form::close()!!}
  </div>
  <!-- /.login-box-body -->
  @if(Session::has('mensaje-errores'))
                  <div class="alert alert-danger alert-dismissible">
                      {{Session::get('mensaje-errores')}}
                  </div>
          @endif

</div>
<!-- /.login-box -->

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@stop