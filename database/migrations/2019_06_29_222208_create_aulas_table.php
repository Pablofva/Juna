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
        Schema::enableForeignKeyConstraints();
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('nombre')->nullable();
            $table->string('piso')->nullable();

            

            
        });

        Schema::table('aulas', function (Blueprint $table) {

            $table->integer('edificio_id')->unsigned();
            
            $table->foreign('edificio_id')->references('id')->on('edificios');

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
