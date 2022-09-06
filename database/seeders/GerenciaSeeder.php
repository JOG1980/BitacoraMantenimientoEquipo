<?php

namespace Database\Seeders;

use App\Models\Gerencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GerenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estado_gerencia1 = new Gerencia();
        $estado_gerencia1->nombre_gerencia = "Gerencia Regional de Transmisión Central";
        $estado_gerencia1->siglas_gerencia = "GRTC";
        $estado_gerencia1->save();
    }
}
