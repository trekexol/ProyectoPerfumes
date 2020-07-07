<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;  

class PaisController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vars = Pais::paginate(5);
        return \view('Pais.index', \compact('vars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('Pais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = new Pais();
        //$var->pk = DB::raw('nexval("var_pk_seq")');
        $var->nombre = $request->get('nombre');
       $var->region = $request->get('region');
        // $var->test = $request->get('states');
        // $var->fecha = $request->get('fecha');
        // $var->telefono = $request->get('telefono');
        $check = request()->validate([
            'nombre' => 'required',
            'region' => 'required'
        ]);
        
        $var->save();
        // return response()->json($var);
        return \redirect('pais')->with('success', 'Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }


    public function buscar(Request $request)
    {
        $administrador = DB::table('var')->where('nombre', $request->nombre)->first();
		

		if(count($administrador) != 0){

		
		}else{ 

			}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Pais::findOrFail($id);
        return \view('Pais.update', \compact('var'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $var = Pais::findOrFail($id);
        $var->nombre = $request->nombre;
        $var->region = $request->region;
        $var->update();
        return \redirect('pais')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Pais::findOrFail($id)->delete();
        return \redirect('pais')->with('success', 'Eliminado Correctamente');
    }
}
