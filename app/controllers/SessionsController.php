<?php

class SessionsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	//public $errorlog="Ningun error";

	public function index()
	{
        return View::make('sessions.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );*/

        //if (Auth::attempt($user))
		if( Auth::attempt(Input::only('email', 'password')) )
        {
            // if(Auth::check())
            // {
            //  return 'check worked!';
            // }
          //  return 'Welcome ' . Auth::user()->email; //You are now logged in
        	$user=Auth::getUser();
        	return View::make('plataforma')->with('user',$user);
        }
        else{
        //return Route::to('login')->with('message','Portemonos serios y demos bien los datos<no login jajaja>');
        //return Redirect::intended('/')->with('message','Portemonos serios y demos bien los datos<no login jajaja>');
        return Redirect::to('login')->with('message','Portemonos serios y demos bien los datos<no login jajaja>');;
        }
		
		//Validate
		//$input= Input::all();
		//return $input['password'];
		//$userdata = array('email'=> Input::get('email'), 'password'=> Input::get('password'));
		/*if (Auth::attempt(array('email' =>  $input['email'], 'password' => $input['password'])))
		{
		    return Redirect::route('users.index');
		}*/
		/*$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' =>$input['password']
			]);

		if ($attempt) {
			return Redirect::intended('/');
		}
		else {
			return "nada...";//Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
		}*/

		//dd('problem');*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('sessions.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('sessions.edit');
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
	public function destroy()
	{
		//
		Auth::logout();
		return Redirect::route('sessions.create');
	}

}
