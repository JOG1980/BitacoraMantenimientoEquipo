<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $equipo = new Equipo();
        // $equipo->r3 = "";
        // $equipo->descripcion = "";
        // $equipo->marca = ""; 
        // $equipo->modelo = "";
        // $equipo->numero_serie = "";
        // $equipo->id_subestacion = 0;
        // $equipo->id_estado_equipo = 0; 
        // $equipo->id_estado_registro = 0; 
        // $equipo->save();

        $equipo1 = new Equipo();
        $equipo1->r3 = "972724";
        $equipo1->descripcion = "Torre de Comnes CENACE 1";
        $equipo1->numero_serie = "";
        //$equipo1->id_marca = null; 
        //$equipo1->id_modelo = null;
        $equipo1->id_subestacion = 1;
        $equipo1->id_estado_equipo = 1; 
        $equipo1->id_estado_registro = 1; 
        $equipo1->save();

        $equipo2 = new Equipo();
        $equipo2->r3 = "972722";
        $equipo2->descripcion = "Base VHF ZOTGM DIR TRANSMISION";
        $equipo2->numero_serie = "103TCWF813";
        $equipo2->id_marca = 2; 
        $equipo2->id_modelo = 11;
        $equipo2->id_subestacion = 1;
        $equipo2->id_estado_equipo = 1; 
        $equipo2->id_estado_registro = 1; 
        $equipo2->save();
    }
}
