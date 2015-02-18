<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hits', function($table)
		{
			$table->increments('id');
		    $table->integer('tour_id')->index();
		    $table->integer('user_id')->index();
		    $table->string('request_ip');
		    $table->string('request_host');
		    $table->string('referrer');
		    $table->string('user_agent');
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
		Schema::drop('hits');
	}

}
