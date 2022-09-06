<?php

namespace Database\Seeders;

use App\Models\Subestacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubestacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subestacion1 = new Subestacion();
        $subestacion1->nombre_subestacion = "Zona de Operacion de Transmisión Guerrero Morelos";
        $subestacion1->siglas_subestacion = "ZOTGM";
        $subestacion1->id_zona = 1;
        $subestacion1->save();

        //
        $subestacion2 = new Subestacion();
        $subestacion2->nombre_subestacion = "Quemado";
        $subestacion2->siglas_subestacion = "QMD";
        $subestacion2->id_zona = 1;
        $subestacion2->save();
    }
}
