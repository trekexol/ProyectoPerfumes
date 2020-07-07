<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia_Esencia;
use Validator, Response;
use DB;

class MateriaEsenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $examples = Materia_Esencia::paginate(5);
        return \view('Materia_Esencia.index', \compact('examples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('Materia_Esencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $example = new Materia_Esencia();
        //$example->pk = DB::raw('nexval("Example_pk_seq")');
        $example->name = $request->get('name');
        $example->lastname = $request->get('lastname');
        $example->fecha_nacimiento = $request->get('fecha_nacimiento');
        // $example->test = $request->get('states');
        // $example->fecha = $request->get('fecha');
        // $example->telefono = $request->get('telefono');
        $check = request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'fecha_nacimiento' => 'required'
        ]);
        
        $example->save();
        // return response()->json($example);
        return \redirect('Materia_Esencia')->with('success', 'Guardado Correctamente');
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
    public function edit($id)
    {
        $example = Materia_Esencia::findOrFail($id);
        return \view('Materia_Esencia.update', \compact('example'));
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
        $example = Materia_Esencia::findOrFail($id);
        $example->name = $request->name;
        $example->lastname = $request->lastname;
        $example->fecha_nacimiento = $request->fecha_nacimiento;
        $example->update();
        return \redirect('Materia_Esencia/index')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Materia_Esencia::findOrFail($id)->delete();
        return \redirect('Materia_Esencia/index')->with('success', 'Eliminado Correctamente');
    }
}
