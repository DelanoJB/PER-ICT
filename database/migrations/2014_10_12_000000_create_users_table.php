<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('first_name');
            $table->string('last_name');
            $table->string('function');
            $table->string('date_of_birth');
            $table->string('postal_code');
            $table->string('housenumber');
            $table->string('street');
            $table->string('residence');
			$table->string('email');
            $table->string('phone_number');
            $table->string('username');
			$table->string('password', 60);
            $table->string('password2', 60);
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
