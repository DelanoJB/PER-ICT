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
        Schema::create('injury_card', function(Blueprint $table)
        {
            /** injury_card */
            $table->increments('id');
            $table->string('gender');
            $table->string('name');
            $table->string('birthday_day');
            $table->string('birthday_month');
            $table->string('birthday_year');
            $table->string('address');
            $table->string('allergies');
            $table->string('medication');
            $table->string('past');
            $table->string('last_meal');
            $table->string('exposure');
            $table->string('o_m');
            $table->string('head_diagnose');
            $table->string('notes');
            /** Table */
            $table->string('time1');
            $table->string('code1');
            $table->string('applied1');
            $table->string('treatment1');
            $table->string('time2');
            $table->string('code2');
            $table->string('applied2');
            $table->string('treatment2');
            $table->string('time3');
            $table->string('code3');
            $table->string('applied3');
            $table->string('treatment3');
            $table->string('time4');
            $table->string('code4');
            $table->string('applied4');
            $table->string('treatment4');
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
        Schema::drop('injury_card');
    }

}

