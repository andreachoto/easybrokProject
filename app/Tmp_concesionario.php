<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class tmp_concesionario extends Model {

    protected $table = 'tmp_concesionario'; 
    protected $fillable=['NOMBRE','CREACION','USUARIOCREACION','MODIFICACION','USUARIOMODIFICACION','ESTADO'];

}
