<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    

    public function edificio()
    {
    	return $this->belongsTo(Edificio::class);
    }
}

