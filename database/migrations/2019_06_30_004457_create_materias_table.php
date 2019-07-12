<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->Increments('id');
            $table->UnsignedInteger('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->string('nombre');
            $table->string('desc_corta');
            $table->integer('anio');
            $table->string('cod_materia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
