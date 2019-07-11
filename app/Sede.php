<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    //
    public function edificios(){
        return $this->hasMany(Edificio::class);
    }
}
