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
        Schema::create('zonas', function (Blueprint $table) {
            $table->id('id_zona');
            $table->string('nombre_zona',100)->unique();
            $table->string('siglas_zona',10)->unique();
            $table->foreignId('id_gerencia')->references('id_gerencia')->on('gerencias'); //debe estar creada primero la tabla  en la migracion???
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
        Schema::dropIfExists('zonas');
    }
};
