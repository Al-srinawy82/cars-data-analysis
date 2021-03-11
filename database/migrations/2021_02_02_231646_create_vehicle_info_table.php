<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicleInfoTable extends Migration {

	public function up()
	{
		Schema::create('vehicle_info', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('vehicle_id')->unsigned();
			$table->integer('gate_id')->unsigned();
			$table->integer('direction_id')->unsigned();
			$table->integer('year_id')->unsigned();
			$table->integer('month_id')->unsigned();
			$table->integer('day_id')->unsigned();
			$table->integer('hour')->nullable();
			$table->time('time')->nullable();
			$table->integer('total_count')->nullable();
			$table->integer('minute_count')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('vehicle_info');
	}
}