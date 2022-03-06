<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnes', function(Blueprint $table)
		{
			$table->integer('id_personne', true);
			$table->string('nom');
			$table->string('prenom');
			$table->date('date_naissance');
			$table->string('email');
			$table->string('adresse')->nullable();
			$table->string('cpostal');
			$table->string('ville');
			$table->string('pays');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnes');
	}

}
