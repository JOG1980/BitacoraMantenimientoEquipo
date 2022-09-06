<?php

namespace Database\Seeders;

use App\Models\Estado_Equipo;
use App\Models\Estado_Registro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estado_equipo1 = new Estado_Equipo();
        $estado_equipo1->nombre_estado_equipo = "Correcto";
        $estado_equipo1->descripcion = "El equipo esta funcionando correctamente.";
        $estado_equipo1->save();

        $estado_equipo2 = new Estado_Equipo();
        $estado_equipo2->nombre_estado_equipo = "Apagado";
        $estado_equipo2->descripcion = "El equipo esta apagado.";
        $estado_equipo2->save();
        
        $estado_equipo3 = new Estado_Equipo();
        $estado_equipo3->nombre_estado_equipo = "Fallado";
        $estado_equipo3->descripcion = "El equipo esta encendido pero fallando.";
        $estado_equipo3->save();

        $estado_equipo4 = new Estado_Equipo();
        $estado_equipo4->nombre_estado_equipo = "Baja";
        $estado_equipo4->descripcion = "El equipo esta dado de baja.";
        $estado_equipo4->save();

        $estado_equipo5 = new Estado_Equipo();
        $estado_equipo5->nombre_estado_equipo = "Verificar";
        $estado_equipo5->descripcion = "El equipo requiere ser verificado.";
        $estado_equipo5->save();
    }
}
