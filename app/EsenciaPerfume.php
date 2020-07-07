<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsenciaPerfume extends Model
{
    protected $table = 'variable';
    protected $primaryKey = 'id_esencia';
    public $filleable = ['nombre', 'tipo', 'descripcion'];

    public $timestamps = false;
}
