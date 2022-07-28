<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function (Blueprint $table) {
            $table->id('id_orden');
            //$table->bigIncrements('id_orden'); 
            $table->string('orden');
            $table->string('descripcion')->nullable();
            $table->text('comentarios')->nullable();
            $table->foreignId('id_equipo')->references('id_equipo')->on('equipos'); //debe estar creada primero la tabla en la migracion???
            
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
        Schema::dropIfExists('orden');
    }
};
