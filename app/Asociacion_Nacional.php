<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociacion_Nacional extends Model
{
    protected $table = 'asociacion_nacional';
    protected $primaryKey = 'id';
    public $filleable = ['nombre', 'iniciales', 'region','id_pais'];

    public $timestamps = false;
}
