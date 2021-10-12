<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/adminlte/css/adminlte.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
   <link rel="stylesheet" href="{{asset('/lightbox/dist/css/lightbox.min.css') }}">
<title>SGD26DEMARZO</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav style="background-color:#c62828; color:" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="color:white" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      !-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
!-->
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown" >
  <!-- <img src="{{asset('img/logo.png')}}">   <li class="nav-link nav-item dropdown" data-toggle="dropdown"> Miguel Ocampo <i class="fas fa-chevron-circle-down"></i></li>!-->

        <a style="color:white" class="nav-link"  data-toggle="dropdown" href="#">
        <img src="{{asset('img/logo.png')}}" width="25px" height="25px"> <span class="ml-1"> {{ Auth::user()->nombre }} </span>
        <i  class="fas fa-sort-down ml-1"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Configuracion de la cuenta</span>
          <div class="dropdown-divider"></div>
          <a href="/perfildelusuario" class="dropdown-item">
          <i class="fas fa-user mr-2"></i> Editar tu perfil
          <!--  <span class="float-right text-muted text-sm">3 mins</span>!-->
          </a>
          <div class="dropdown-divider"></div>
          <!--
          <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> Reestablecer Email
          </a>
          !-->
          <!--
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="fas fa-key mr-2"></i>Reestablecer Contraseña
          </a>
          !-->
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Cerrar Sesion</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </div>
      </li>
      <li class="nav-item">
        <a style="color:white" class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i  class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{asset('img/logo.png') }}" alt="SGD26DEMARZO" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SGD26DEMARZO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
    
        </div>
        <div class="info">
          <a href="#" class="d-block">Bienvenido, {{ Auth::user()->nombre }} </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- SidebarSearch Form -->
      <!--
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
    !-->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/home" class="nav-link @if(isset($home)) {{$home}} @endif">
                <i class="fas fa-home mr-3"></i>
                        <p>Home</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/perfildelusuario" class="nav-link @if(isset($perfil_user)) {{$perfil_user}} @endif">
                <i class="fas fa-user mr-3"></i>
                  <p>Mi perfil</p>
                </a>
              </li>
          <li class="nav-item @if(isset($crear_usuario)) menu-open  @endif @if(isset($listar_usuarios) ) menu-open @endif ">
            <a href="#" class="nav-link  @if(isset($crear_usuario)) {{$crear_usuario}} @endif @if(isset($listar_usuarios) ) {{$listar_usuarios}} @endif ">
              <i class="fas fa-users mr-3"></i>
              <p>
                Gestionar usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/crear/usuario" class="nav-link @if(isset($crear_usuario)) {{$crear_usuario}} @endif">
                <i class="fas fa-user-plus mr-3"></i>
                  <p>Crear usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/listar/usuarios" class="nav-link @if(isset($listar_usuarios)) {{$listar_usuarios}} @endif">
                <i class="fas fa-list mr-3"></i>
                  <p>Listar usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          <!--
          <li class="nav-item @if(isset($crear_documento)) menu-open  @endif">
            <a href="#" class="nav-link  ">
            <i class="fas fa-folder-open mr-3"></i>
              <p>
                Gestion documental
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/crear/documento" class="nav-link @if(isset($crear_documento)) {{$crear_documento}} @endif">
                <i class="fas fa-plus mr-3"></i>
                <p>Crear documento</p>
                </a>
              </li>

            </ul>
          </li>
          !-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!--
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
              !-->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid ">
         @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer  class="main-footer">
    <!-- To the right -->
    <div  style="display:none;" class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong style="display:none;" >Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> <span> &copy; SGD26DEMARZO
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/js/adminlte.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('/lightbox/dist/js/lightbox.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
@yield('scripts')

</body>
</html>
