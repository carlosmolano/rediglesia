<?php

class Barrio extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'cod' => 'required',
		'nombre' => 'required',
		'ciudad' => 'required'
	);
}
