<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<img src="<?php echo e(asset('storage/eid.jpg')); ?>">

<?php echo e(Form::open(['url'=>'coba','files'=>'true'])); ?>

<?php echo e(Form::label('Unggah file data tersebut')); ?>

<?php echo e(Form::file('file_akta_lahir', ['class'=>'form-control'])); ?>

<?php echo e(Form::submit('Selesai', ['class'=>'btn btn-primary'])); ?>

<?php echo e(Form::close()); ?>

</body>
</html>