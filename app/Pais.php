<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';
    protected $primaryKey = 'id';
    public $filleable = ['nombre', 'region'];

    public $timestamps = false;
}
