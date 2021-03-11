<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectionsTable extends Migration {

	public function up()
	{
		Schema::create('directions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('directions');
	}
}