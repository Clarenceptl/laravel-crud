<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salles', function(Blueprint $table)
		{
			$table->integer('id_salle', true);
			$table->integer('numero_salle');
			$table->string('nom_salle');
			$table->integer('etage_salle');
			$table->integer('places');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('salles');
	}

}
