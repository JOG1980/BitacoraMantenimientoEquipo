<?php

namespace Database\Seeders;

use App\Models\Modelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $modelo01 = new Modelo();
        $modelo01->nombre_modelo = "PTP300";
        $modelo01->id_marca = 2; 
        $modelo01->save();

        $modelo02 = new Modelo();
        $modelo02->nombre_modelo = "C63RLB71068T";
        $modelo02->id_marca = 2; 
        $modelo02->save();

        $modelo03 = new Modelo();
        $modelo03->nombre_modelo = "D43LRA77A5CK";
        $modelo03->id_marca = 2; 
        $modelo03->save();

        $modelo04 = new Modelo();
        $modelo04->nombre_modelo = "51145-61L0";
        $modelo04->id_marca = 19; 
        $modelo04->save();

        $modelo05 = new Modelo();
        $modelo05->nombre_modelo = "T5544A";
        $modelo05->id_marca = 2; 
        $modelo05->save();

        $modelo06 = new Modelo();
        $modelo06->nombre_modelo = "TB9300";
        $modelo06->id_marca = 7; 
        $modelo06->save();

        $modelo07 = new Modelo();
        $modelo07->nombre_modelo = "SISTUPS 3KVA+PF+2BB180AH";
        $modelo07->id_marca = 18; 
        $modelo07->save();
        
        $modelo08 = new Modelo();
        $modelo08->nombre_modelo = "PSU-IM30120-48";
        $modelo08->id_marca = 18; 
        $modelo08->save();

        $modelo09 = new Modelo();
        $modelo09->nombre_modelo = "FMP 25.48G";
        $modelo09->id_marca = 18; 
        $modelo09->save();

        $modelo10 = new Modelo();
        $modelo10->nombre_modelo = "DC122461";
        $modelo10->id_marca = 17; 
        $modelo10->save();

        $modelo11 = new Modelo();
        $modelo11->nombre_modelo = "LAM25KKD9AA2AN";
        $modelo11->id_marca = 2; 
        $modelo11->save();
    }
}
