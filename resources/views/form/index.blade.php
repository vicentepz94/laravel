@extends("layout.index")
@section("content")
<div class='panel-body'>

	<!-- {!! Form::open(['route' => 'formulario.store', 'method' => 'POST']) !!}  -->
<form action={ action('formulario') } method="POST">
		<div class='form-group'>
			<label for="exampleInputFile">Nombre</label>
   			<input type="text" class="form-control"placeholder="Nombre">
        </div>

        <div class='form-group'>
           <!--  <label for="inputPassword">Contraseña:</label>
                {!! Form::password('password', null , ['class' => 'form-control'])!!} -->
                <label for="exampleInputFile">Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
        </div>

        <div class='form-group'>
        		<button type="submit" class='btn btn-primary mr5 right'>Iniciar sesion</button>
        		<!-- {!! Form::submit('Iniciar sesion', ['class' => 'btn btn-primary mr5 right']) !!} -->
    	</div>
	</form>
	    <!-- {!! Form::close() !!} -->
</div>

@stop

 