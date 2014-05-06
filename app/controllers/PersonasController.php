<?php

class PersonasController extends BaseController {

//	protected $layout ='masterperson';
	/**
	 * Persona Repository
	 *
	 * @var Persona
	 */
	protected $persona;

	public function __construct(Persona $persona)
	{
		$this->persona = $persona;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$personas = $this->persona->all();
		$personas = $this->persona->paginate(10);
		//$personas = Persona::paginate(10);



		return View::make('personas.index', compact('personas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('personas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Persona::$rules);

		if ($validation->passes())
		{
			$this->persona->create($input);

			return Redirect::route('personas.index');
		}

		return Redirect::route('personas.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$persona = $this->persona->findOrFail($id);

		return View::make('personas.show', compact('persona'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$persona = $this->persona->find($id);

		if (is_null($persona))
		{
			return Redirect::route('personas.index');
		}

		return View::make('personas.edit', compact('persona'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Persona::$rules);

		if ($validation->passes())
		{
			$persona = $this->persona->find($id);
			$persona->update($input);

			return Redirect::route('personas.show', $id);
		}

		return Redirect::route('personas.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->persona->find($id)->delete();

		return Redirect::route('personas.index');
	}

}
