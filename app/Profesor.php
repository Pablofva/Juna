<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    public function comisiones(){
        return $this->hasMany(Comision::class);
    }
}
