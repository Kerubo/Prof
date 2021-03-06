<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('members.index',['members'=> $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('members.create');
		return Redirect::to('members.login');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$playload = Input::all();
		 $validation = validation::make($playload,Member::$rules);

		 if($validation->fails())
		 {
            return Redirect::to('register')
            ->withErrors($validation)->withInput(Input::except('password'));
		 }  
		 else
		 {
		 	$member = new Member;
		 	$member->username = Input::get('username');
		 	$member->password = Hash::make(Input::get('password'));
		 	$member->save();

		    return Redirect::to('members.show');
		 }
	}


	public function login()
	{
		return View::make('members.login');
		
	}
	public function signin()
	{
		// Capture form input
     	$username = Input::get('username');
     	$password = Input::get('password');

     	$rules = 
     	[
     		'username' => 'required|exists:users,username',
     		'password' => 'required'
     	];

     	$validation = Validator::make(Input::only(['username','password']), $rules);

     	if($validation->passes())
     	{
			if (Auth::attempt(array('username' => $email, 'password' => $password)))
			{
				return Redirect::to('members/create');
			}

			return Redirect::back()->with('message', 'Check email and password');
     	}

     	return Redirect::back()->withErrors($validation)->withInput();
	}

    public function register()
    {
    	return View::make('members.register');
    	return Redirect::route('members.login');
    }
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)

	{
		//

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
