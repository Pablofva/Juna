<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero')->nullable();
            $table->integer('id_materia')->unsigned();
            $table->integer('carga_horaria_semanal')->nullable();
            $table->integer('id_ciclo')->unsigned();

            $table->foreign('id_materia')->references('id')->on('materias');
            $table->foreign('id_ciclo')->references('id')->on('ciclos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comisions');
    }
}
