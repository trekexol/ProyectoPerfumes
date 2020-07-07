<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::get('/exampleCRUD/index', 'ExampleController@index');
Route::resource('/exampleCRUD', 'ExampleController');


Route::resource('/familia', 'FamiliaController');

// Productores

        ///----- Productores
       

        ///----- Formulas


        //------- Catalogo
     //   Route::resource('/productores/catalogo', 'CatalogoProductorController');

        // --------Facturas

        //-------- Fragancias
        Route::resource('/fragancia', 'FraganciaController');
        

// Proveedores

///---- Proveedores
Route::resource('/proveedores', 'ProveedorController'); 

            ///----- Proveedores
           // Route::resource('/productores', 'ProductorController');

            ///----- Condiciones


            //------- Catalogo
          //  Route::resource('/productores/catalogo', 'CatalogoProductorController');

            // --------Pedidos

            //-------- Materias Primas
          //  Route::resource('/fragancia', 'FraganciaController');
 
Route::resource('/variable', 'VariableController'); 
Route::resource('/asociacion', 'AsociacionController'); 
Route::resource('/familia-olfativa', 'Familia_OlfativaController'); 
Route::resource('/pais', 'PaisController'); 
Route::resource('/perfumista', 'PerfumistaController');
Route::resource('/productor', 'ProductorController');


//Productos
Route::resource('/productores/ingrediente', 'IngredienteController');

Route::resource('/formulas', 'FormulasController'); 



//Route::get('/variable-formula', 'VariableFormulaController@index'); 

Route::get('/variable-formula', 'VariableFormulaController@getIndex');

Route::resource('/esencia-perfume', 'EsenciaPerfumeController'); 

Route::resource('/componente-quimico', 'ComponenteQuimicoController'); 

Route::resource('/materia-esencia', 'MateriaEsenciaController'); 

