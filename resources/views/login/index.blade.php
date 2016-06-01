<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class='panel-body'>
	<form action={ action('login') } method="POST">
	<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<label for="nombre">Usuario:</label>
			<input type="text"	class="form-control" placeholder="Nombre Usuario">
		</div>
		<div class="form-group">
			<label for="contraseña">Contraseña:</label>
			<input type="password" class="form-control" placeholder="Contraseña">
		</div>
		<div class="form-group">
			<button type="submit" class="btn-primary">Iniciar Sesion</button>
		</div>
	</form>
</body>
</html>