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
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        {!!Html::style('css/_all-skins.min.css')!!}
        <!-- DatePicker -->
        {!!Html::style('css/datepicker3.css')!!}
    </head>

    <body class="hold-transition skin-purple-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
            <!-- Logo -->
                <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b><img src="{{asset('imagenes/molinstec.png')}}"></b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>MOLINSTEC</b></span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="header">Usted tiene 4 mensajes</li>

                                    <li>
                                    <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                        <!-- start message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="{{asset('imagenes/usuarios/perfil.png')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="{{asset('dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="{{asset('dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>

                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>

                                    <li>
                                    <!-- inner menu: contains the actual data -->

                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>

                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">

                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>

                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li>
                                        <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">


                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>

                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{url('/contraseña')}}" class="btn btn-default btn-flat">Cambiar Contraseña</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{url('logout')}}" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
                        </ul>
                    </div>
                </nav>
            </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ</li>
            <li class="treeview">
                      <a href="#">
                        <i class="fa fa-users"></i> <span>Módulo Usuarios</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li>
                          <a href="#"><i class="fa fa-users"></i> Usuarios
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="{{ url('/perfil/create') }}"><i class="fa fa-user"></i> Agregar tipo usuario</a></li>
                            <li><a href="{{ url('/usuario/create') }}"><i class="fa fa-plus"></i>Agregar Usuario</a></li>
                            <li><a href="{{ url('/usuario') }}"><i class="fa fa-list"></i>Lista Usuarios</a></li>
                          </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-users"></i>Permisos usuarios </a></li>
                      </ul>
                    </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-briefcase"></i>
                <span>Equipos</span>
                <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="{{ url('/equipo/create') }}"><i class="fa fa-plus"></i>Agregar equipo</a></li>
                <li class="active"><a href="{{ url('/equipo') }}"><i class="fa fa-list"></i>Lista Equipos</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-pdf-o"></i>
                <span>Formularios</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-line-chart"></i>
                <span>Estadísticas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="{{ url('/reporte') }}"><i class="fa fa-line-chart"></i> Servicios por tipo</a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i> Rendimiento por técnico</a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i> Rendimiento móvil</a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i> Rendimiento masas</a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i> Rendimiento de tiempo</a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i> Tiempo promedio servicio</a></li>
                <li><a href="#"><i class="fa fa-line-chart"></i> Cantidad de servicios por zona</a></li>
              </ul>
            </li>
         </ul>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Bienvenido al sistema de calibración de masas y balanzas de la empresa MOLINSTEC
            <small></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            @yield('contenido')

        </section>
        <!-- /.content -->
      </div>
        </div>

    <!-- jQuery 2.2.3 -->
    {!!Html::script('js/jquery-2.2.3.min.js')!!}
    <!-- jQuery UI 1.11.4 -->
    {!!Html::script('//code.jquery.com/ui/1.11.4/jquery-ui.min.js')!!}
    <!-- Bootstrap 3.3.6 -->
    {!!Html::script('js/bootstrap.min.js')!!}
    <!-- DatePicker -->
    {!!Html::script('js/plugins/bootstrap-datepicker.js')!!}
    {!!Html::script('js/plugins/bootstrap-datepicker.es.js')!!}
    <!-- AdminLTE App -->
    {!!Html::script('js/app.min.js')!!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!!Html::script('js/dashboard.js')!!}
    <!-- AdminLTE for demo purposes -->
    {!!Html::script('js/demo.js')!!}

    @yield('scripts')
    </body>
</html>

