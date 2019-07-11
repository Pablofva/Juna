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
        Schema::create('comisions', function (Blueprint $table) {
            $table->Increments('id');
            $table->UnsignedInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->UnsignedInteger('aula_id');
            $table->foreign('aula_id')->references('id')->on('aulas');
            $table->UnsignedInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesors');
            $table->integer('numero');
            $table->string('dia_horario');
            


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
        Schema::dropIfExists('comisions');
    }
}
