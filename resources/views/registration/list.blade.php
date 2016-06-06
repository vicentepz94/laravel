<!DOCTYPE html>
<html lang="en">
<?php use App\Models\User; ?>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
	</head>
	<body>

		<table class="table">
			<thead>
				<th>Nombre usuario</th>
				<th>Contraseña</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</thead>
			@foreach($user as $u)
			<tbody>
				<td>{{ $u->username }}</td>
				<td>{{ $u->password }}</td>
				<td><a href="{{route('user.edit',$u->id)}}">Editar</td>
				<td> 
				{!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $u->id]]) !!}
				{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
				</td>
			</tbody>
			@endforeach
		</table>

	
		<a href="login">Click here</a>
		</div>
</body>
</html>