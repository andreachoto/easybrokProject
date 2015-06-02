<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tmp_cargo extends Model {

    
   protected $table = 'tmp_cargo'; 
   protected $fillable=['NOMBRE','CREACION','USUARIOCREACION','MODIFICACION','USUARIOMODIFICACION','ESTADO'];
  
}
