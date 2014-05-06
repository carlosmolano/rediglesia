@extends('layouts.scaffold')

@section('main')

<h1>Create Departamento</h1>

{{ Form::open(array('route' => 'departamentos.store')) }}
	<ul>
        <li>
            {{ Form::label('codigo', 'Codigo:') }}
            {{ Form::input('number', 'codigo') }}
        </li>

        <li>
            {{ Form::label('pais', 'Pais:') }}
            {{ Form::input('number', 'pais') }}
        </li>

        <li>
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre') }}
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


