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
        {!!Html::style('css/bootstrap.min.css')!!}
        <!-- Font Awesome -->
        {!!Html::style('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')!!}
        <!-- Ionicons -->
        {!!Html::style('//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')!!}
        <!-- Theme style -->
        {!!Html::style('css/AdminLTE.min.css')!!}
    </head>

    <body class="hold-transition login-page">
        @yield('contenido')
        <!-- jQuery 2.2.3 -->
        {!!Html::script('js/jquery-2.2.3.min.js')!!}
        <!-- jQuery UI 1.11.4 -->
        {!!Html::script('//code.jquery.com/ui/1.11.4/jquery-ui.min.js')!!}
        <!-- Bootstrap 3.3.6 -->
        {!!Html::script('js/bootstrap.min.js')!!}
    </body>
</html>