<?php

class UserController extends \BaseController {

	public $restful= true;
	//protected $layout ='master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users= User::all();
		//$this->layout->content = View::make('users.index', compact('users'));
		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//$this->layout->content = View::make('users.create');
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * Vamos a crear un Nuevo usuario aqui en store
	 * @return Response
	 */
	public function store()
	{
		//
		$user = new User;
		$user->email=Input::get('email');
		//$user->password= Hash::make(Input::get('password')) ;
		$user->password= Input::get('password');
		$user->save();
		//return "usuario $user->id";
		//return Redirect::route('users.show', $user->id);
		//return Redirect::route('users.index')->withInput()->withErrors($user->errors);
		return Redirect::route('users.index')->withInput()->withErrors($user->errors);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user= User::find($id);
		$this->layout->content = View::make('users.show', compact('user'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}