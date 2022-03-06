<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('films', function(Blueprint $table)
		{
			$table->integer('id_film', true);
			$table->integer('id_genre')->nullable()->index('id_genre');
			$table->integer('id_distributeur')->nullable();
			$table->string('titre');
			$table->string('resum')->nullable();
			$table->date('date_debut_affiche')->nullable();
			$table->date('date_fin_affiche')->nullable();
			$table->integer('duree_minutes')->nullable();
			$table->integer('annee_production')->nullable();
			$table->integer('price')->default(0);
			$table->timestamps(6);
			$table->boolean('reserved')->default(0);
			$table->integer('Rate')->default(0);
			$table->string('image_path');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('films');
	}

}
