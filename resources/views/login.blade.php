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

    @if(count($errors)>0)
        <div class="alert alert-danger alert-dismissible">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!!$error!!}</li>
                @endforeach
            </ul>
        </div>
    @endif
        {!!Form::open(['route' => 'login.store','method' =>'POST'])!!}
            <div class="form-group">
                {!!Form::label('rut_usuario','Rut')!!}
                {!!Form::text('rut_usuario',null,['class' => 'form-control'])!!}
            </div>

            <div class="form-group">
                {!!Form::label('password','Contraseña')!!}
                {!!Form::password('password',['class' => 'form-control'])!!}
            </div>
                {!!Form::button('<i class="fa fa-key"></i>Ingresar',['class' => '.btn-flat btn-primary', 'role' => 'button','type' => 'submit'])!!}
        {!!Form::close()!!}
                {!!link_to('password/email', $title = 'Olvidó su contraseña?', $attributes = null, $secure = null)!!}


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