<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function($table)
		{
			$table->increments('id');
		    $table->string('firstname', 20);
		    $table->string('lastname', 20);
		    $table->string('email', 100);
		    $table->string('company', 100);
		    $table->tinyInteger('role');
		    $table->string('phone', 20);
		    $table->string('mobile', 20);
		    $table->boolean('sms')->default('1');
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
		Schema::drop('contacts');
	}

}
