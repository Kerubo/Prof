<?php
/**
* 
*/
class Profile extends Eloquent
{
	protected $table = 'profiles';

	public static $rules = array(
        'fname'=> 'required',
        'lname' => 'required',
        'phone number'=> 'required',
        'photo' => 'required',
        'curriculumn vitae'=> 'required',
        'nickname' => 'required'

	 );
}