<?php

class ProfileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
	
		$Profile = Profile::all();
		return View::make('profile.index',['profile'=> $Profile]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profile.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$validation = Validator::make($data,Profile::$rules);
		if($validation->fails())
		 {
            return Redirect::to('profile/show')
            ->withErrors($validation)->withInput(Input::except('password'));
		 }  
		 else
		 {
		 	$Profile = new Profile;
		 	$Profile->firstname = Input::get('fname');
		 	$Profile->lastname = Input::get('lname');
		 	$Profile->phone = Input::get('phone number');
		 	$Profile->photo = Input::get('photo number');
		 	$Profile->resume = Input::get('curriculumn vitae');
		 	$Profile->nickname = Input::get('nickname');
		 	$Profile->save();

		 	return Redirect::to('profile');

		 }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('profile.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('profile.edit');
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