<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriptions', function($table)
		{
			$table->increments('id');
		    $table->integer('user_id');
		    $table->integer('level_id');
		    $table->datetime('expires_at');
		    $table->boolean('status')->default(0); // invalid: 0 / valid: 1
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
		Schema::drop('subscriptions');
	}

}
