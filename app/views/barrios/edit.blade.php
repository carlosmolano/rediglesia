@extends('layouts.scaffold')

@section('container')

<h1>Edit Barrio</h1>
{{ Form::model($barrio, array('method' => 'PATCH', 'route' => array('barrios.update', $barrio->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('barrios.show', 'Cancel', $barrio->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
