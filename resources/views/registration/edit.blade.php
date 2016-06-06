@extends('layout.index')
		<!-- PUT para actualizar -->
		
@section('content')
{!! Form::model($user->id, array('method' => 'PUT', 'route' => array('user.update',$user->id))) !!}
    <ul>
        <li>
            {!! Form::label('username', 'Username:') !!}
            {!! Form::text('username',$user->username) !!}
        </li>
        <li>
            {!! Form::label('password', 'Password:') !!}
            {!! Form::text('password') !!}
        <li>
            {!! Form::submit('Actualizar', array('class' => 'btn btn-info')) !!}
        </li>
    </ul>
    		<a href="{{ route('login') }}">Click here</a>		<a href="{{ route('list') }}">Listar</a>
{!! Form::close() !!}
@stop
