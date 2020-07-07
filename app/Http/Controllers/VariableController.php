<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variable;
use Validator, Response;
use DB;

class VariableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $variables = Variable::paginate(5);
        return \view('Variable.index', \compact('variables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('Variable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $variable = new Variable();
        //$variable->pk = DB::raw('nexval("variable_pk_seq")');
        $variable->nombre = $request->get('nombre');
        $variable->etiqueta = $request->get('etiqueta');
        $variable->descripcion = $request->get('descripcion');
        // $variable->test = $request->get('states');
        // $variable->fecha = $request->get('fecha');
        // $variable->telefono = $request->get('telefono');
        $check = request()->validate([
            'nombre' => 'required',
            'etiqueta' => 'required',
            'descripcion' => 'required'
        ]);
        
        $variable->save();
        // return response()->json($variable);
        return \redirect('variable')->with('success', 'Guardado Correctamente');
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
        $administrador = DB::table('variable')->where('nombre', $request->nombre)->first();
		

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
        $variable = Variable::findOrFail($id);
        return \view('Variable.update', \compact('variable'));
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
        $variable = Variable::findOrFail($id);
        $variable->nombre = $request->nombre;
        $variable->etiqueta = $request->etiqueta;
        $variable->descripcion = $request->descripcion;
        $variable->update();
        return \redirect('variable')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Variable::findOrFail($id)->delete();
        return \redirect('variable')->with('success', 'Eliminado Correctamente');
    }
}
