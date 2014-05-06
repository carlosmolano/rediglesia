@extends('layouts.scaffold')
@section('container')

    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h1 class="panel-title">Por Favor Logeate...</h1>
			 	</div>
			  	<div class="panel-body chinin">
			  	@if (Session::has('message'))
				 <div class="bg-warning">
					<p style="color: red">{{ Session::get('message') }}</p>
				 </div>
				@endif
				{{ Form::open(array('route' => 'sessions.store')) }}
					<div >
				      {{ Form::label('email', 'Dirección de E-mail') }}
				      {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
				    </div>


					<div>
						{{ Form::label('password','Password:')}}
						{{ Form::password('password',array('class'=>'form-control' ))}}
					</div>
					<div class="checkbox">
	                    <label>
	                        Recordar contraseña
	                        {{ Form::checkbox('rememberme', true) }}
	                    </label>
	                </div>
	                {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
	            {{ Form::close() }}
          

			</div>
		</div>
	</div>

@stop