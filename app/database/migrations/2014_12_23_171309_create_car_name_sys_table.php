<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarNameSysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_name_sys', function($table)
		{
		    $table->increments('car_name_id')->unsigned();
            $table->string('car_name', 20);
            $table->string('car_motor_cylinder', 1);
            $table->string('car_differential', 1);
            $table->string('car_capacity', 1);
            $table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('car_name_sys');
	}

}
