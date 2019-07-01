<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulaRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_recursos', function (Blueprint $table) {
            $table->increments('id_recurso');
            $table->integer('id_aula')->unsigned();

            $table->foreign('id_aula')->references('id')->on('aulas');
            $table->foreign('id_recurso')->references('id')->on('recursos');
        });    
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aula_recursos');
    }
}
