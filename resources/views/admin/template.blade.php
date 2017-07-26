<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Admin</title>

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('bootswatch-paper/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/admin-style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminLTE/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminLTE/css/skins/_all-skins.min.css') }}">

	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div>

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <span class="logo-mini">RAI</span>
      <span class="logo-lg">Al<b>Multazam</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="{{ route('admin/logout') }}" class="logout" style="color:white;">
              <span class="glyphicon glyphicon-off"></span><span> Logout</span>
            </a>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column-->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('adminLTE/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <!-- <p>Nama user</p> -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
            <li class="{{ $class }}">
              <a href="#">
              <i class="fa fa-commenting"></i> <span>Lihat Jamaah</span>
              </a>
            </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  @yield('content')

  </div>
        <!-- /.content-wrapper -->
      <footer class="main-footer">
    <strong>Copyright &copy;2017 <a href="http://www.almultazam.co.id">Al Multazam Group</a>.</strong> All rights
    reserved.
  </footer>
</div>

<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

@stack('scripts')

<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('adminLTE/js/app.min.js')}}"></script>

</body>
</html>