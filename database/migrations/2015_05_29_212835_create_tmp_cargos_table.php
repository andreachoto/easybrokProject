<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmpCargosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmp_cargo', function(Blueprint $table)
		{
			$table->integer('id');
                        $table->string('NOMBRE');
                        $table->string('CREACION');
                        $table->int('USUARIOCREACION');
                        $table->string('MODIFICACION');
    			$table->int('USUARIOMODIFICACION');
        	        $table->string('ESTADO');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tmp_cargos');
	}

}
