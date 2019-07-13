<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    public function aula()
    {
    	return $this->belongsTo(Aula::class);
    }

    public function materia()
    {
    	return $this->belongsTo(Materia::class);
    }

    public $timestamps = false;
}

