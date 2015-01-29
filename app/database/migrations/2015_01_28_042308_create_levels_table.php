<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('levels', function(Blueprint $table)
		{
			$table->increments('id');
		    $table->string('title', 125);
		    $table->string('description', 225);
		    $table->smallInteger('max_closings');
		    $table->smallInteger('max_agents');
		    $table->smallInteger('max_tasks');
		    $table->smallInteger('max_tours');
		    $table->boolean('sms');
		    $table->decimal('price', 5, 2);
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
		Schema::drop('levels');
	}

}
