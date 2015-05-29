<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Tmp_cargo;


class CargosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    return view('cargo.crear');	
            
	}
        
        public function lista()
        {
            
           $cargos= Tmp_cargo::all();
           return view('cargo.listar',compact('cargos'));
        }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
          $mensaje='Cargo Guardado Correctamente';
          $input= Request::all();
          Tmp_cargo::create($input);
          return view('cargo.index')->with('mensajes',$mensaje); 
        }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
