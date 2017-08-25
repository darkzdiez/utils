<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Ubicacion
		Schema::create('location_estados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo_cne');
			$table->string('estado');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->nullable();
			$table->softDeletes();
		});
		Schema::create('location_municipios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('municipio');
			$table->string('codigo_cne');
			$table->integer('estado_id')->unsigned();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->nullable();
			$table->softDeletes();
			$table->foreign('estado_id')->references('id')->on('location_estados')->onUpdate('cascade')->onDelete('cascade');
		});
		Schema::create('location_parroquias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('parroquia');
			$table->string('codigo_cne');
			$table->integer('municipio_id')->unsigned();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->nullable();
			$table->softDeletes();
			$table->foreign('municipio_id')->references('id')->on('location_municipios')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('location_parroquias');
		Schema::drop('location_municipios');
		Schema::drop('location_estados');
	}

}
