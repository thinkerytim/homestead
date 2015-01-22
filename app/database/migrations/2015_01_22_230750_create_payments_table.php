<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function($table)
		{
			$table->increments('id');
		    $table->string('txn_id');
		    $table->string('name');
		    $table->string('address_street');
		    $table->string('address_city');
		    $table->string('address_state');
		    $table->string('address_zip');
		    $table->string('address_country_code');
		    $table->string('item_name');
		    $table->dateTime('payment_date');
		    $table->decimal('payment_amount');
		    $table->decimal('payment_fee');
		    $table->string('payment_status');
		    $table->string('payment_type');
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
		Schema::drop('payments');
	}

}
