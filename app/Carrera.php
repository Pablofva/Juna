<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function instituto()
    {
    	return $this->belongsTo(Instituto::class);
    }

    public $timestamps = false;
}
