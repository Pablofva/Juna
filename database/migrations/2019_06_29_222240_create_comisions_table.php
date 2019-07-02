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
            $table->increments('id');
            $table->string('nombre');
            $table->string('horario');
            $table->string('horariodos');
            $table->timestamps();
           
            
        });
        Schema::table('comisions', function (Blueprint $table) {

            $table->integer('materia_id')->unsigned();
            
            $table->foreign('materia_id')->references('id')->on('materias');

            $table->integer('aula_id')->unsigned();
            
            $table->foreign('aula_id')->references('id')->on('aulas');



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
