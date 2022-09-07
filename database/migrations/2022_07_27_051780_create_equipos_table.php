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
            
            // $table->foreignId('id_subestacion')->references('id_subestacion')->on('subestaciones')->nullable(); 
            // $table->foreignId('id_marca')->references('id_marca')->on('marcas')->nullable(); 
            // $table->foreignId('id_modelo')->references('id_modelo')->on('modelos')->nullable(); 
            // $table->foreignId('id_estado_equipo')->references('id_estado_equipo')->on('estados_equipos')->nullable(); 
            // $table->foreignId('id_estado_registro')->references('id_estado_registro')->on('estados_registros')->nullable(); 
            
            //NOTA 1: Para hacer la referencia primero debe de existir la tabla referenciada.
            //NOTA 2: Con->nullable()->references('???')->on('???')->onDelete('cascade') se logra que las llaves foraneas (con restriccion) acepten null

            $table->foreignId('id_subestacion')->nullable()->references('id_subestacion')->on('subestaciones')->onDelete('cascade'); 
            $table->foreignId('id_marca')->nullable()->references('id_marca')->on('marcas')->onDelete('cascade'); 
            $table->foreignId('id_modelo')->nullable()->references('id_modelo')->on('modelos')->onDelete('cascade'); 
            $table->foreignId('id_estado_equipo')->nullable()->references('id_estado_equipo')->on('estados_equipos')->onDelete('cascade'); 
            $table->foreignId('id_estado_registro')->nullable()->references('id_estado_registro')->on('estados_registros')->onDelete('cascade'); 
            
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
