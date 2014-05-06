@extends('masterperson')

@section('container')

<h1>Edit Persona</h1>
{{ Form::model($persona, array('method' => 'PATCH', 'route' => array('personas.update', $persona->id))) }}
	<ul>
        <li>
            {{ Form::label('nombres', 'Nombres:') }}
            {{ Form::text('nombres') }}
        </li>

        <li>
            {{ Form::label('apellidos', 'Apellidos:') }}
            {{ Form::text('apellidos') }}
        </li>

        <li>
            {{ Form::label('sexo', 'Sexo:') }}
            {{ Form::input('number', 'sexo') }}
        </li>

        <li>
            {{ Form::label('f_nacimiento', 'F_nacimiento:') }}
            {{ Form::text('f_nacimiento') }}
        </li>

        <li>
            {{ Form::label('direccion', 'Direccion:') }}
            {{ Form::text('direccion') }}
        </li>

        <li>
            {{ Form::label('barrio', 'Barrio:') }}
            {{ Form::input('number', 'barrio') }}
        </li>

        <li>
            {{ Form::label('pais', 'Pais:') }}
            {{ Form::input('number', 'pais') }}
        </li>

        <li>
            {{ Form::label('telefono', 'Telefono:') }}
            {{ Form::input('number', 'telefono') }}
        </li>

        <li>
            {{ Form::label('bautizado', 'Bautizado:') }}
            {{ Form::checkbox('bautizado') }}
        </li>

        <li>
            {{ Form::label('f_bautizado', 'F_bautizado:') }}
            {{ Form::text('f_bautizado') }}
        </li>

        <li>
            {{ Form::label('promesado', 'Promesado:') }}
            {{ Form::checkbox('promesado') }}
        </li>

        <li>
            {{ Form::label('f_promesado', 'F_promesado:') }}
            {{ Form::text('f_promesado') }}
        </li>

        <li>
            {{ Form::label('doc_identificacion', 'Doc_identificacion:') }}
            {{ Form::input('number', 'doc_identificacion') }}
        </li>

        <li>
            {{ Form::label('num_identificacion', 'Num_identificacion:') }}
            {{ Form::input('number', 'num_identificacion') }}
        </li>

        <li>
            {{ Form::label('folio_bautismo', 'Folio_bautismo:') }}
            {{ Form::input('number', 'folio_bautismo') }}
        </li>

        <li>
            {{ Form::label('folio_miembro', 'Folio_miembro:') }}
            {{ Form::input('number', 'folio_miembro') }}
        </li>

        <li>
            {{ Form::label('estado', 'Estado:') }}
            {{ Form::input('number', 'estado') }}
        </li>

        <li>
            {{ Form::label('servicio', 'Servicio:') }}
            {{ Form::input('number', 'servicio') }}
        </li>

        <li>
            {{ Form::label('observaciones', 'Observaciones:') }}
            {{ Form::input('number', 'observaciones') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('personas.show', 'Cancel', $persona->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
