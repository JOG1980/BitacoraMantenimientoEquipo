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
        Schema::create('subestaciones', function (Blueprint $table) {
            $table->id('id_subestacion');
            $table->string('nombre_subestacion',100)->unique();
            $table->string('siglas_subestacion',5)->unique();
            $table->foreignId('id_zona')->references('id_zona')->on('zonas'); //debe estar creada primero la tabla  en la migracion???
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
        Schema::dropIfExists('subestaciones');
    }
};
