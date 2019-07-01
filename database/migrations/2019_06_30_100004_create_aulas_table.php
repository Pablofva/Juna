<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_edificio')->unsigned();
            $table->integer('piso')->nullable();
            $table->integer('capacidad')->nullable();
            $table->string('obs')->nullable();


            $table->foreign('id_edificio')->references('id')->on('edificios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}
