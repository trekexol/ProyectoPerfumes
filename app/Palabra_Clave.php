<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palabra_Clave extends Model
{
    protected $table = 'palabra_clave';
    protected $primaryKey = 'id';
    public $filleable = ['nombre'];

    public $timestamps = false;
}
