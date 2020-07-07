<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VariableFormula;
use Validator, Response;
use DB;

class VariableFormulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        $variables = VariableFormula::paginate(5);
        return \view('Variable_Formula.index', \compact('variables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('Variable_Formula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $variable = new VariableFormula();
        //$variable->pk = DB::raw('nexval("variable_pk_seq")');
        $variable->fecha_inicial = $request->get('fecha_inicial');
        $variable->peso = $request->get('peso');
        $variable->tipo_formula = $request->get('tipo_formula');
        // $variable->test = $request->get('states');
        // $variable->fecha = $request->get('fecha');
        // $variable->telefono = $request->get('telefono');
        $check = request()->validate([
            'fecha_inicial' => 'required',
            'peso' => 'required',
            'tipo_formula' => 'required'
        ]);
        
        $variable->save();
        // return response()->json($variable);
        return \redirect('Variable_Formula')->with('success', 'Guardado Correctamente');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function edit($id)
    {
        $variable = VariableFormula::findOrFail($id);
        return \view('Variable_Formula.update', \compact('variable'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $variable = VariableFormula::findOrFail($id);
        $variable->nombre = $request->nombre;
        $variable->etiqueta = $request->etiqueta;
        $variable->descripcion = $request->descripcion;
        $variable->update();
        return \redirect('Variable_Formula/index')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($fecha_inicial)
    {
     //   $delete = VariableFormula::findOrFail($id)->delete();
      //  return \redirect('Variable_Formula/index')->with('success', 'Eliminado Correctamente');
    }
}
