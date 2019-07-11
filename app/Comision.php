<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    //
    public function materia(){
        return $this->belongsTo(Materia::class);
    }
    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }
    public function aula(){
        return $this->belongsTo(Aula::class);
    }
}
