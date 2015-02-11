<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToClosings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('closings', function(Blueprint $table)
		{
			$table->string('mls_id', 25);
			$table->integer('buyer_id');
			$table->integer('seller_id');
			$table->integer('title_company_id');
			$table->integer('bank_company_id');
			$table->mediumText('description');
			$table->mediumText('private_notes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('closings', function(Blueprint $table)
		{
			$table->dropColumn('mls_id');
			$table->dropColumn('buyer_id');
			$table->dropColumn('seller_id');
			$table->dropColumn('title_company_id');
			$table->dropColumn('bank_company_id');
			$table->dropColumn('description');
			$table->dropColumn('private_notes');
		});
	}

}
