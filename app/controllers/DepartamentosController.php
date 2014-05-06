<?php

class DepartamentosController extends BaseController {

	/**
	 * Departamento Repository
	 *
	 * @var Departamento
	 */
	protected $departamento;

	public function __construct(Departamento $departamento)
	{
		$this->departamento = $departamento;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$departamentos = $this->departamento->all();

		return View::make('departamentos.index', compact('departamentos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('departamentos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Departamento::$rules);

		if ($validation->passes())
		{
			$this->departamento->create($input);

			return Redirect::route('departamentos.index');
		}

		return Redirect::route('departamentos.create')
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
		$departamento = $this->departamento->findOrFail($id);

		return View::make('departamentos.show', compact('departamento'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$departamento = $this->departamento->find($id);

		if (is_null($departamento))
		{
			return Redirect::route('departamentos.index');
		}

		return View::make('departamentos.edit', compact('departamento'));
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
		$validation = Validator::make($input, Departamento::$rules);

		if ($validation->passes())
		{
			$departamento = $this->departamento->find($id);
			$departamento->update($input);

			return Redirect::route('departamentos.show', $id);
		}

		return Redirect::route('departamentos.edit', $id)
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
		$this->departamento->find($id)->delete();

		return Redirect::route('departamentos.index');
	}

}
