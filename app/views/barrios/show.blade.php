@extends('layouts.scaffold')

@section('container')

<h1>Show Barrio</h1>

<p>{{ link_to_route('barrios.index', 'Return to all barrios') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Cod</th>
				<th>Nombre</th>
				<th>Ciudad</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $barrio->cod }}}</td>
					<td>{{{ $barrio->nombre }}}</td>
					<td>{{{ $barrio->ciudad }}}</td>
                    <td>{{ link_to_route('barrios.edit', 'Edit', array($barrio->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('barrios.destroy', $barrio->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
