<?php

namespace Database\Seeders;

use App\Models\Zona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estado_zona1 = new Zona();
        $estado_zona1->nombre_zona = "Zona de Transmisión Guerrero";
        $estado_zona1->siglas_zona = "ZTG";
        $estado_zona1->id_gerencia = 1; 
        $estado_zona1->save();
    }
}
