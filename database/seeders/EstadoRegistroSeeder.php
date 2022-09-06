<?php

namespace Database\Seeders;

use App\Models\Estado_Registro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoRegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $estado_registro1 = new Estado_Registro();
        $estado_registro1->nombre_estado_registro = "Normal";
        $estado_registro1->descripcion = "Registro en estado normal.";
        $estado_registro1->save();

        $estado_registro2 = new Estado_Registro();
        $estado_registro2->nombre_estado_registro = "Revisar";
        $estado_registro2->descripcion = "Registro que necesita ser revisado.";
        $estado_registro2->save();
        
        $estado_registro3 = new Estado_Registro();
        $estado_registro3->nombre_estado_registro = "Pendiente";
        $estado_registro3->descripcion = "Registro que esta pendiente";
        $estado_registro3->save();
    }
}
