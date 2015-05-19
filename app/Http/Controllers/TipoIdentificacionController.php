<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TipoIdentificacionController extends Controller {
    public function index()
    {
        return view('welcome');
    }
    
    public function crearTipoIdentificacion()
    {
        return view('administracion/TipoIdentificacion');
    }
    
    public function modificarTipoIdentificacion()
    {
        return view('administracion/TipoIdentificacion');
    }
    
    public function eliminarTipoIdentificacion()
    {
        return view('administracion/TipoIdentificacion');
    }
    
    public function listarTipoIdentificacion()
    {
        return view('administracion/TipoIdentificacion');
    }
}
