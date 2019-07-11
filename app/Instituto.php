<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituto extends Model
{
    //
    public function isName(){
        return $this->nombre==='INGENIERIA';
    }
    public function carreras(){
        return $this->hasMany(Carrera::class);
    }
}
