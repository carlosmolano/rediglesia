<?php

class BarriosController extends BaseController {

	/**
	 * Barrio Repository
	 *
	 * @var Barrio
	 */
	protected $barrio;

	public function __construct(Barrio $barrio)
	{
		$this->barrio = $barrio;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$barrios = $this->barrio->all();

		return View::make('barrios.index', compact('barrios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('barrios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Barrio::$rules);

		if ($validation->passes())
		{
			$this->barrio->create($input);

			return Redirect::route('barrios.index');
		}

		return Redirect::route('barrios.create')
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
		$barrio = $this->barrio->findOrFail($id);

		return View::make('barrios.show', compact('barrio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$barrio = $this->barrio->find($id);

		if (is_null($barrio))
		{
			return Redirect::route('barrios.index');
		}

		return View::make('barrios.edit', compact('barrio'));
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
		$validation = Validator::make($input, Barrio::$rules);

		if ($validation->passes())
		{
			$barrio = $this->barrio->find($id);
			$barrio->update($input);

			return Redirect::route('barrios.show', $id);
		}

		return Redirect::route('barrios.edit', $id)
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
		$this->barrio->find($id)->delete();

		return Redirect::route('barrios.index');
	}

}
