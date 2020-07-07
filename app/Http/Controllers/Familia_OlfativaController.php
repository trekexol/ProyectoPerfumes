<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia_Olfativa;  

class Familia_OlfativaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vars = Familia_Olfativa::paginate(5);
        return \view('Familia_Olfativa.index', \compact('vars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('Familia_Olfativa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = new Familia_Olfativa();
        //$var->pk = DB::raw('nexval("var_pk_seq")');
        $var->nombre = $request->get('nombre');
       $var->descripcion = $request->get('descripcion');
        // $var->test = $request->get('states');
        // $var->fecha = $request->get('fecha');
        // $var->telefono = $request->get('telefono');
        $check = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        
        $var->save();
        // return response()->json($var);
        return \redirect('familia-olfativa')->with('success', 'Guardado Correctamente');
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
        $var = Familia_Olfativa::findOrFail($id);
        return \view('Familia_Olfativa.update', \compact('var'));
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
        $var = Familia_Olfativa::findOrFail($id);
        $var->nombre = $request->nombre;
        $var->descripcion = $request->descripcion;
        $var->update();
        return \redirect('familia-olfativa')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Familia_Olfativa::findOrFail($id)->delete();
        return \redirect('familia-olfativa')->with('success', 'Eliminado Correctamente');
    }
}
