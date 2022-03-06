<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributeursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('distributeurs', function(Blueprint $table)
		{
			$table->integer('id_distributeur', true);
			$table->string('nom');
			$table->string('telephone');
			$table->string('adresse')->nullable();
			$table->string('cpostal')->nullable();
			$table->string('ville')->nullable();
			$table->string('pays')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('distributeurs');
	}

}
