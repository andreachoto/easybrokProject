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
		Schema::create('tmp_cargos', function(Blueprint $table)
		{
			$table->increments('ID');
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
