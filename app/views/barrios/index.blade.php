@extends('layouts.scaffold')

@section('container')

<h1>All Barrios</h1>

<p>{{ link_to_route('barrios.create', 'Add new barrio') }}</p>

@if ($barrios->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Cod</th>
				<th>Nombre</th>
				<th>Ciudad</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($barrios as $barrio)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no barrios
@endif

@stop
