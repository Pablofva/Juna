<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisionCompletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comision_completas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comision_id')->unsigned();
            $table->integer('profesor_id')->unsigned();
            $table->integer('aula_id')->unsigned();
            $table->string('dias_horarios');

            $table->foreign('aula_id')->references('id')->on('aulas');            
            $table->foreign('comision_id')->references('id')->on('comisiones');
            $table->foreign('profesor_id')->references('id')->on('profesores');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comision_completas');
    }
}
