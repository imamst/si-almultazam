<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title></title>

	<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminLTE/css/AdminLTE.min.css')}}">
	<!-- <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"> -->

	<!-- Scripts -->
	<script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>AlMultazam</b>Group</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">
    {{'Login to start your session'}}<br>
    <span style="color: red;">@if (isset($message)) {{$message}} @endif</span>
    
    </p>

    {{Form::open(['url'=>'admin/login'])}}
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    {{Form::close()}}

  </div>
  <!-- /.login-box-body -->
</div>
</body>
</html>