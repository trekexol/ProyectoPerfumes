<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia_Olfativa extends Model
{
    protected $table = 'familia_olfativa';
    protected $primaryKey = 'id';
    public $filleable = ['nombre', 'descripcion'];

    public $timestamps = false;
}
