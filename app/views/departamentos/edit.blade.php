@extends('layouts.scaffold')

@section('main')

<h1>Edit Departamento</h1>
{{ Form::model($departamento, array('method' => 'PATCH', 'route' => array('departamentos.update', $departamento->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('departamentos.show', 'Cancel', $departamento->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
