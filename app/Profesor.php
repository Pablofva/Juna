<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    public function comision()
    {
        return $this->hasMany(Comision::class);
    }
}
