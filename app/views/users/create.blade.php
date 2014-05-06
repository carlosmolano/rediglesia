@extends('master')

@section('container')
	<h1>Crear Users</h1>
	{{ Form::open(['route'=>'users.store']) }}
		<div>
			{{ Form::label('email', 'Email: ')}} </br>
			{{ Form::text('email')}}
		</div>
		<div>
			{{ Form::label('password', 'Password: ')}}
			{{ Form::text('password') }}
		</div>
		<div>
			{{ Form::submit('Crear Usuario')}}
		</div>
	{{ Form::close()}}
@stop