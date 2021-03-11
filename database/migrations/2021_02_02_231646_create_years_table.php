<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateYearsTable extends Migration {

	public function up()
	{
		Schema::create('years', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('years');
	}
}