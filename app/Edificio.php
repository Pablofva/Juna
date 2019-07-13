<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    public function sede()
    {
    	return $this->belongsTo(Sede::class);
    }
    public $timestamps = false;
    
}
