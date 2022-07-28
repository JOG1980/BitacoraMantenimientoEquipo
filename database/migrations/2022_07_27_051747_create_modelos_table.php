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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id('id_modelo');
            //$table->bigIncrements('id_modelo'); 
            $table->string('nombre_modelo',100);
            $table->text('descripcion')->nullable();
            $table->foreignId('id_marca')->references('id_marca')->on('marcas')->nullable(); //debe estar creada primero la tabla personal en la migracion???
            
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
        Schema::dropIfExists('modelos');
    }
};
