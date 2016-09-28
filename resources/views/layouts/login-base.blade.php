<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Logo Empresa en la pestaña del navegador -->
  <link rel="icon" href="{{asset('imagenes/molinstec.png')}}" type="image/gif" sizes="16x16">
  <!-- Bootstrap 3.3.6 -->
  {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  {!!Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
  <!-- Theme style -->
  {!!Html::style('dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
@yield('contenido')

<!-- jQuery 2.2.3 -->
{!!Html::script('plugins/jQuery/jquery-2.2.3.min.js')!!}
<!-- Bootstrap 3.3.6 -->
{!!Html::script('bootstrap/js/bootstrap.min.js')!!}
<!-- iCheck -->
{!!Html::script('plugins/iCheck/icheck.min.js')!!}
</body>
</html>