<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()

	{
		//
		Schema::create('membes',function($table)
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
		Schema::drop('members');
	}

}
