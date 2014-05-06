@extends('layouts.scaffold')

@section('container')

<h1>Create Barrio</h1>

{{ Form::open(array('route' => 'barrios.store')) }}
	<ul>
        <li>
            {{ Form::label('cod', 'Cod:') }}
            {{ Form::input('number', 'cod') }}
        </li>

        <li>
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre') }}
        </li>

        <li>
            {{ Form::label('ciudad', 'Ciudad:') }}
            {{ Form::input('number', 'ciudad') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


