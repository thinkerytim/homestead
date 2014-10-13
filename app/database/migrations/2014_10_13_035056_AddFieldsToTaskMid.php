<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToTaskMid extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('closing_task', function(Blueprint $table)
		{
			$table->tinyInteger('status');
			$table->text('notes');
			$table->dateTime('due_at');
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
			$table->dropColumn('status')->default(0);
			$table->dropColumn('notes');
			$table->dropColumn('due_at');
		});
	}

}
