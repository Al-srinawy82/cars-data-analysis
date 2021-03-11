<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->foreign('vehicle_id')->references('id')->on('vehicles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->foreign('gate_id')->references('id')->on('gates')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->foreign('direction_id')->references('id')->on('directions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->foreign('year_id')->references('id')->on('years')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->foreign('month_id')->references('id')->on('months')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->foreign('day_id')->references('id')->on('days')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->dropForeign('vehicle_info_vehicle_id_foreign');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->dropForeign('vehicle_info_gate_id_foreign');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->dropForeign('vehicle_info_direction_id_foreign');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->dropForeign('vehicle_info_year_id_foreign');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->dropForeign('vehicle_info_month_id_foreign');
		});
		Schema::table('vehicle_info', function(Blueprint $table) {
			$table->dropForeign('vehicle_info_day_id_foreign');
		});
	}
}