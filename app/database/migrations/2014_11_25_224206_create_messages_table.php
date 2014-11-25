<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function($table)
		{
			$table->increments('id');
		    $table->integer('from_id')->unsigned();
		    $table->integer('to_id')->unsigned();
		    $table->string('subject', 125);
		    $table->text('message');
		    $table->boolean('status')->default(0); // unread: 0 / read: 1
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
		Schema::drop('messages');
	}

}
