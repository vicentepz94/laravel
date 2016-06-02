<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
	</head>
	<body>

		<div class='panel-body'>
		{!! Form::open(['route' => 'registration' , 'method' => 'POST' ]) !!}
		
			<div class="form-group">
				<label for="nombre">Usuario:</label>
				  {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario' ]) !!}	
			</div>
			<div class="form-group">
				<label for="contraseña">Contraseña:</label>
				 {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!} 
			</div>
			<div class="form-group">


			{!! Form::submit('Crear cuenta', ['class' => 'btn-submit']) !!}
			</div>
			<a href="login">Click here</a>
		{!! Form::close() !!}
</body>
</html>
