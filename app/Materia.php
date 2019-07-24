<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function carrera()
    {
    	return $this->belongsToMany(Carrera::class);
    }

   

    
}
