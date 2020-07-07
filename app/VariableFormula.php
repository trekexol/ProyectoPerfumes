<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariableFormula extends Model
{
    protected $table = 'variable_formula';
    protected $primaryKey = 'fecha_inicial';
    protected $primaryKey2 = 'id_productor';
    protected $primaryKey3 = 'id_variable';
    public $filleable = ['peso', 'tipo_formula', 'fecha_final'];

    public $timestamps = false;
}
