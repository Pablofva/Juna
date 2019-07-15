<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituto extends Model
{
    public function carreras()
    {
    	return $this->hasMany(Carrera::class);
    }
}
