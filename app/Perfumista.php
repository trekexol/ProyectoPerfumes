<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfumista extends Model
{
    protected $table = 'perfumista';
    protected $primaryKey = 'id';
    public $filleable = ['nombre_primero', 'nombre_segundo', 'apellido_primero', 'apellido_segundo', 'genero','id_pais'];

    public $timestamps = false;
}
