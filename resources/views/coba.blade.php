<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<img src="{{ asset('storage/eid.jpg') }}">

{{Form::open(['url'=>'coba','files'=>'true'])}}
{{Form::label('Unggah file data tersebut')}}
{{Form::file('file_akta_lahir', ['class'=>'form-control'])}}
{{Form::submit('Selesai', ['class'=>'btn btn-primary'])}}
{{Form::close()}}
</body>
</html>