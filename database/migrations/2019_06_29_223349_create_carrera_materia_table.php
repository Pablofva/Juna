<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera_materia', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::table('carrera_materia', function (Blueprint $table) {

            $table->integer('carrera_id')->unsigned();
            
            $table->foreign('carrera_id')->references('id')->on('carreras');

            $table->integer('materia_id')->unsigned();
            
            $table->foreign('materia_id')->references('id')->on('materias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera_materia');
    }
}
