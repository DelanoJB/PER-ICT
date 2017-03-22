<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGewondenKaartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gewonden_kaarts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('gender');
            $table->string('Name');
            $table->string('adress');
            $table->string('allergy');
            $table->string('medication');
            $table->string('last meal');
            $table->string('exposure');
            $table->string('accident mechanism');
            $table->string('primary diagnosis');
            $table->string('Injury');
            $table->string('note');
            /** Treatment */
            $table->string('time0');
            $table->string('code0');
            $table->string('treated by0');
            $table->string('treatment0');
            $table->string('time1');
            $table->string('code1');
            $table->string('treated by1');
            $table->string('treatment1');
            $table->string('time2');
            $table->string('code2');
            $table->string('treated by2');
            $table->string('treatment2');
            $table->string('time3');
            $table->string('code3');
            $table->string('treated by3');
            $table->string('treatment3');
            /** End Treatment */
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
		Schema::drop('gewonden_kaarts');
	}

}
