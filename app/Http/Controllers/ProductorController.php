<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productor;
use Validator, Response;
use DB;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vars = Productor::paginate(5);
        return \view('Productor.index', \compact('vars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('Productor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vars = new Productor();
        $vars->nombre = $request->get('nombre');
        $vars->pagina_web = $request->get('pagina_web');
        $vars->calle_avenida = $request->get('calle_avenida');
        $vars->codigo_postal = $request->get('codigo_postal');
        $vars->id_asociacion = $request->get('id_asociacion');
        
        $check = request()->validate([
            'nombre' => 'required',
            'pagina_web' => 'required',
            'calle_avenida' => 'required'
        ]);
        
        $vars->save();
        // return response()->json($asociacion);
        return \redirect('productor')->with('success', 'Guardado Correctamente');
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
        $var = Productor::findOrFail($id);
        return \view('Productor.update', \compact('var'));
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
        $var = Productor::findOrFail($id);
        $var->nombre = $request->nombre;
        $var->pagina_web = $request->pagina_web;
        $var->codigo_postal = $request->codigo_postal;
        $var->calle_avenida = $request->calle_avenida;
        $var->id_asociacion = $request->id_asociacion;
        $var->update();
        return \redirect('productor')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Productor::findOrFail($id)->delete();
        return \redirect('productor')->with('success', 'Eliminado Correctamente');
    }
}
