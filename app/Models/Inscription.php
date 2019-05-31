<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['user_id', 'nombre', 'domicilio', 't_inscripcion', 't_plan'];
}
