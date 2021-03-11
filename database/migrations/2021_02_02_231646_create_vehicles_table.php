<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclesTable extends Migration {

	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('type', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('vehicles');
	}
}