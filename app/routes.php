<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('sessions.create');
	//return new Redirect::Route('login');
});
Route::when('sessions/*', 'auth');



Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
Route::resource('users','UserController');
Route::resource('sessions', 'SessionsController');
//Route::controller('users');

Route::resource('personas', 'PersonasController');

Route::get('profile', function ()
{
	return Auth::user()->email;
})->before('auth');

Route::resource('barrios', 'BarriosController');

Route::resource('departamentos', 'DepartamentosController');

/*Route::get('/inicio',function()
{
	$user = new User;
	$user->email="prueba@prueba.com";
	$user->username="carlosmolano";
	$user->nombre="Carlos";
	$user->apellido="Molano	";
	$user->password="chinin";
	$user->save();
	return "creamos el usuario";

});*/

//Route::controller('users','UsersController');
