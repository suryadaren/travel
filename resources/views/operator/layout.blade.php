<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Travel Agency | Admin-@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/home/images/favicon.png" type="image/x-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/operator/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/operator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/operator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/operator/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Storage::url(auth()->guard('operator')->user()->foto)}}" class="img-circle elevation-2" alt="img">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->guard('operator')->user()->nama}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/operators" class="nav-link {{ (request()->is('operators')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/operators/pemesanan" class="nav-link {{ (request()->is('operators/pemesanan')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
                Pemesanan
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/operators/jadwal" class="nav-link {{ (request()->is('operators/jadwal')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/operators/riwayat" class="nav-link {{ (request()->is('operators/riwayat')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Riwayat Perjalanan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/operators/kota" class="nav-link {{ (request()->is('operators/kota')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-city"></i>
              <p>
                Kota
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/operators/mobil" class="nav-link {{ (request()->is('operators/mobil')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-taxi"></i>
              <p>
                Mobil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/operators/sopir" class="nav-link {{ (request()->is('operators/sopir')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Sopir
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/operators/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/operator/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/operator/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/operator/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/operator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/operator/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/operator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="/operator/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/operator/dist/js/demo.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','success')}}"
  
    switch(type){
      case 'success':
       toastr.info("{{ Session::get('message') }}");
       break;
    case 'error':
      toastr.error("{{ Session::get('message') }}");
      break;
    }
  @endif
</script>
@yield('js')
</body>
</html>
