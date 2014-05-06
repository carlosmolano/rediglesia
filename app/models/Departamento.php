<?php

class Departamento extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'codigo' => 'required',
		'pais' => 'required',
		'nombre' => 'required'
	);
}
