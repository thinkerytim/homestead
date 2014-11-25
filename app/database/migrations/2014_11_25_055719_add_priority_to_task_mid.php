<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriorityToTaskMid extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('closing_task', function(Blueprint $table)
		{
			$table->tinyInteger('priority');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('closing_task', function(Blueprint $table)
		{
			$table->dropColumn('priority');
		});
	}

}
