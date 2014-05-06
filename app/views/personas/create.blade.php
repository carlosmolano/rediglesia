@extends('layouts.masterperson')
@section('container')
    <script>
        $(function() {
            $( "#date_start" ).datepicker();
        });
    </script>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Crear Persona</h1>
        </div>
    <div class="panel-body">

    <div role="form">
    {{ Form::open(array('route' => 'personas.store')) }}
    	<ul>
            <div >
                {{ Form::label('nombres', 'Nombres:') }}
                {{ Form::text('nombres') }}
            </div>
            

            <li>
                {{ Form::label('apellidos', 'Apellidos:') }}
                {{ Form::text('apellidos') }}
            </li>

            <li>
                {{ Form::label('sexo', 'Sexo:') }}
                {{ Form::select('sexo',  array('1' =>'Masculino' ,'0' => 'Femenino'),1, array('class' => 'form-control'))}}
            </li>

            <li>
                {{ Form::label('f_nacimiento', 'F_nacimiento:') }}
                <input type="date" name="f_nacimiento" id="date_start" value="{{ Input::old('f_bautizado') }}" class="form-control" />
               
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
                
                {{ Form::select('pais',  array('57' =>'Colombia' ,'59' => 'Ecuador'),57, array('class' => 'form-control'))}}
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
                <input type="date" name="f_bautizado" id="date_start"  />
            </li>

            <li>
                {{ Form::label('promesado', 'Promesado:') }}
                {{ Form::checkbox('promesado') }}
            </li>

            <li>
                {{ Form::label('f_promesado', 'F_promesado:') }}
                <input type="date" name="f_promesado" id="date_start" />
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

            <div >
                {{ Form::label('estado', 'Estado:') }}
                {{ Form::select('estado',  array('0' =>'Soltero' ,'1' => 'Casado'),1, array('class' => 'form-control'))}}                
            </div>

            <li>
                {{ Form::label('servicio', 'Servicio:') }}
                {{ Form::input('number', 'servicio') }}
            </li>

            <li>
                {{ Form::label('observaciones', 'Observaciones:') }}
                {{ Form::input('number', 'observaciones') }}
            </li>

    		<li>
    			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
    		</li>
    	</ul>
    {{ Form::close() }}
    </div>
    </div>


    @if ($errors->any())
    	<ul>
    		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
    	</ul>
    @endif


@stop


