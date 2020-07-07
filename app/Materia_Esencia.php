<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia_Esencia extends Model
{
    protected $table = 'Materia_Esencia';
    protected $primaryKey = 'id_materia_esencia';
    protected $fk_proveedor = 'id_proveedor';
    public $filleable = ['estado', 'punto_ebullicion', 'numero_ipc', 'numero_ipc_alter', 'numero_einecs', 'numero_tsca_cas', 'descripcion_visual', 'nombre', 'parte', 'naturaleza', 'tipo', 'solubilidad', 'proceso', 'descproceso'];

    public $timestamps = false;

}
