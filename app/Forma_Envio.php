<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forma_Envio extends Model
{
    protected $table = 'Forma_Envio';
    protected $primaryKey = 'id_forma_envio';
    public $filleable = ['tiempo_envio', 'coste', 'transporte', 'extras'];


    public $timestamps = false;
}
