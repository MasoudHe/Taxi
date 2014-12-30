<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars_info', function($table)
		{
		    $table->increments('id')->unsigned();
            $table->integer('car_name_id')->unsigned();
            $table->integer('car_usage_id');
            $table->integer('car_type_id');
            $table->string('car_model',4);
            $table->string('car_pelak_1', 3);
            $table->string('car_pelak_2', 1);
            $table->string('car_pelak_3', 3);
            $table->string('car_pelak_4', 2);
            $table->integer('car_fuel');
            $table->text('car_motor_number');
            $table->text('car_frame_number');
            $table->integer('car_body_color');
            $table->integer('car_roof_color');
            $table->integer('car_strip_color');
            $table->integer('car_logo_id');
            $table->integer('car_vin_number');
            $table->text('car_fuelcard_number');
            $table->integer('car_fueling_type');
            $table->integer('car_price');
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
        Schema::drop('cars_info');
	}

}
