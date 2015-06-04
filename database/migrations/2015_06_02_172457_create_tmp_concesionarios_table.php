<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmpConcesionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmp_concesionarios', function(Blueprint $table)
		{
			$table->increments('id');
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
		Schema::drop('tmp_concesionarios');
	}

}
