@extends('masterperson')

@section('container')

<h1>Show Persona</h1>

<p>{{ link_to_route('personas.index', 'Retornar a Personas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nombres</th>
				<th>Apellidos</th>
				<th>Sexo</th>
				<th>F_nacimiento</th>
				<th>Direccion</th>
				<th>Barrio</th>
				<th>Pais</th>
				<th>Telefono</th>
				<th>Bautizado</th>
				<th>F_bautizado</th>
				<th>Promesado</th>
				<th>F_promesado</th>
				<th>Doc_identificacion</th>
				<th>Num_identificacion</th>
				<th>Folio_bautismo</th>
				<th>Folio_miembro</th>
				<th>Estado</th>
				<th>Servicio</th>
				<th>Observaciones</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $persona->nombres }}}</td>
					<td>{{{ $persona->apellidos }}}</td>
					<td>{{{ $persona->sexo }}}</td>
					<td>{{{ $persona->f_nacimiento }}}</td>
					<td>{{{ $persona->direccion }}}</td>
					<td>{{{ $persona->barrio }}}</td>
					<td>{{{ $persona->pais }}}</td>
					<td>{{{ $persona->telefono }}}</td>
					<td>{{{ $persona->bautizado }}}</td>
					<td>{{{ $persona->f_bautizado }}}</td>
					<td>{{{ $persona->promesado }}}</td>
					<td>{{{ $persona->f_promesado }}}</td>
					<td>{{{ $persona->doc_identificacion }}}</td>
					<td>{{{ $persona->num_identificacion }}}</td>
					<td>{{{ $persona->folio_bautismo }}}</td>
					<td>{{{ $persona->folio_miembro }}}</td>
					<td>{{{ $persona->estado }}}</td>
					<td>{{{ $persona->servicio }}}</td>
					<td>{{{ $persona->observaciones }}}</td>
                    <td>{{ link_to_route('personas.edit', 'Edit', array($persona->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('personas.destroy', $persona->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
