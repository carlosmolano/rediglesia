<?php

class Persona extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombres' => 'required',
		'apellidos' => 'required',
		'sexo' => 'required',
		'f_nacimiento' => 'required',
		'direccion' => 'required',
		'barrio' => 'required',
		'pais' => 'required',
		'telefono' => 'required',
		'bautizado' => 'required',
		'f_bautizado' => 'required',
		'promesado' => 'required',
		'f_promesado' => 'required',
		'doc_identificacion' => 'required',
		'num_identificacion' => 'required',
		'folio_bautismo' => 'required',
		'folio_miembro' => 'required',
		'estado' => 'required',
		'servicio' => 'required',
		'observaciones' => 'required'
	);
}
