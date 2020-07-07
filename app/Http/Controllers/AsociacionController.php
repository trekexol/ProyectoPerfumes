<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asociacion_Nacional;
use Validator, Response;
use DB;

class AsociacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $asociacion = Asociacion_Nacional::paginate(5);
        return \view('Asociacion.index', \compact('asociacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('Asociacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asociacion = new Asociacion_Nacional();
        $asociacion->nombre = $request->get('nombre');
        $asociacion->iniciales = $request->get('iniciales');
        $asociacion->region = $request->get('region');
        $asociacion->id_pais = $request->get('id_pais');
        
        $check = request()->validate([
            'nombre' => 'required',
            'iniciales' => 'required',
            'region' => 'required'
        ]);
        
        $asociacion->save();
        // return response()->json($asociacion);
        return \redirect('asociacion')->with('success', 'Guardado Correctamente');
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
        $var = Asociacion_Nacional::findOrFail($id);
        return \view('Asociacion.update', \compact('var'));
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
        $variable = Asociacion_Nacional::findOrFail($id);
        $variable->nombre = $request->nombre;
        $variable->iniciales = $request->iniciales;
        $variable->region = $request->region;
        $variable->id_pais = $request->id_pais;
        $variable->update();
        return \redirect('asociacion')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Asociacion_Nacional::findOrFail($id)->delete();
        return \redirect('asociacion')->with('success', 'Eliminado Correctamente');
    }
}
