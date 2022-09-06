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
            $table->id('id_equipo');
            //$table->bigIncrements('id_equipo'); 
            $table->string('r3')->unique();
            $table->string('descripcion');
            $table->string('numero_serie')->nullable();
            // $table->foreignId('id_subestacion')->references('id_subestacion')->on('subestaciones')->nullable(); //debe estar creada primero la tabla en la migracion???
            // $table->foreignId('id_marca')->references('id_marca')->on('marcas')->nullable(); //debe estar creada primero la tabla en la migracion???
            // $table->foreignId('id_modelo')->references('id_modelo')->on('modelos')->nullable(); //debe estar creada primero la tabla en la migracion???
            // $table->foreignId('id_estado_equipo')->references('id_estado_equipo')->on('estados_equipos')->nullable(); //debe estar creada primero la tabla en la migracion???
            // $table->foreignId('id_estado_registro')->references('id_estado_registro')->on('estados_registros')->nullable(); //debe estar creada primero la tabla en la migracion???
            
            $table->foreignId('id_subestacion')->nullable()->references('id_subestacion')->on('subestaciones')->onDelete('cascade'); //debe estar creada primero la tabla en la migracion???
            $table->foreignId('id_marca')->nullable()->references('id_marca')->on('marcas')->onDelete('cascade'); //debe estar creada primero la tabla en la migracion???
            $table->foreignId('id_modelo')->nullable()->references('id_modelo')->on('modelos')->onDelete('cascade'); //debe estar creada primero la tabla en la migracion???
            $table->foreignId('id_estado_equipo')->nullable()->references('id_estado_equipo')->on('estados_equipos')->onDelete('cascade'); //debe estar creada primero la tabla en la migracion???
            $table->foreignId('id_estado_registro')->nullable()->references('id_estado_registro')->on('estados_registros')->onDelete('cascade'); //debe estar creada primero la tabla en la migracion???
            
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
