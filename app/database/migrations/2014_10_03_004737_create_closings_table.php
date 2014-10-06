<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClosingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('closings', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('agent_id');
		    $table->string('title', 125);
		    $table->datetime('closes_at');
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
		Schema::drop('closings');
	}

}
