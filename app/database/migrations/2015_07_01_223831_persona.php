<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	
	public function up()
	{
		Schema::create('persona', function($tabla) 
		{
 
			// id auto incremental primary key
			$tabla->integer('cedula');
			//varchar 50
			$tabla->string('nombre', 50);
			//varchar 100
			$tabla->string('apellido', 50);
			//varchar 100
			$tabla->string('email', 100);
			//varchar 100
			//campos para controlar inserts y updates
			//created_at updated_at
			$tabla->timestamps();
 
		});
 
	}
	public function down()
	{
		Schema::drop('persona');
	}

}
