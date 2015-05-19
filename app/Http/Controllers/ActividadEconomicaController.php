<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdministracionController extends Controller {
    public function index()
    {
        return view('welcome');
    }
    
    public function crearActividadEconomica()
    {
        return view('administracion/ActividadEconomica');
    }
    
    public function modificarActividadEconomica()
    {
        return view('administracion/ActividadEconomica');
    }
    
    public function eliminarActividadEconomica()
    {
        return view('administracion/ActividadEconomica');
    }
    
    public function listarActividadEconomica()
    {
        return view('administracion/ActividadEconomica');
    }
    
    public function crearTipoIdentificacion()
    {
        return view('administracion/ActividadEconomica');
    }
    
    public function modificarActividadEconomica()
    {
        return view('administracion/ActividadEconomica');
    }
    
    public function eliminarActividadEconomica()
    {
        return view('administracion/ActividadEconomica');
    }
    
    public function listarActividadEconomica()
    {
        return view('administracion/ActividadEconomica');
    }

}
