<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
	</head>
	<body>

		<div class='panel-body'>
		{!! Form::open(['route' => 'login' , 'method' => 'POST']) !!}
		
	

			<div class="form-group">
				<label for="nombre">Usuario:</label>
				<input type="text"	class="form-control" placeholder="Nombre Usuario">
			</div>
			<div class="form-group">
				<label for="contraseña">Contraseña:</label>
				<input type="password" class="form-control" placeholder="Contraseña">
			</div>
			<div class="form-group">


			{!! Form::submit('Iniciar sesion') !!}
			</div>
		{!! Form::close() !!}
</body>
</html>