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
        Schema::create('equipos', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id_equipo'); 
            $table->string('r3');
            $table->string('descripcion');
            //$table->string('marca');
            //$table->string('modelo');
            $table->string('numero_serie');
            //$table->string('estado_registro');
            //$table->string('orden');
            $table->foreignId('id_marca')->references('id_marca')->on('marcas'); //debe estar creada primero la tabla en la migracion???
            $table->foreignId('id_modelo')->references('id_modelo')->on('modelos'); //debe estar creada primero la tabla en la migracion???
            $table->foreignId('id_estado_registro')->references('id_estado_registro')->on('estados_registros'); //debe estar creada primero la tabla en la migracion???
            
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
        Schema::dropIfExists('equipos');
    }
};
