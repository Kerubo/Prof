<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	* https://www.youtube.com/watch?v=PNtuds0l8bA
	 *
	 * @return void
	 */
	public function up()

	{
		//
		Schema::create('users',function($table)
			{
				$table->increments('id');
				$table->string('username');
				$table->string('password');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
