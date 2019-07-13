<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function carrera()
    {
    	return $this->belongsTo(Carrera::class);
    }
    public $timestamps = false;
   

    
}
