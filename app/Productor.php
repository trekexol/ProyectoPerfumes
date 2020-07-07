<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    protected $table = 'productor';
    protected $primaryKey = 'id';
    public $filleable = ['id_asociacion', 'nombre', 'pagina_web', 'calle_avenida', 'codigo_postal'];

    public $timestamps = false;
}
