<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        
        $this->call(EstadoEquipoSeeder::class);

        $this->call(EstadoRegistroSeeder::class);

        $this->call(MarcaSeeder::class);

        $this->call(ModeloSeeder::class);

        $this->call(GerenciaSeeder::class);

        $this->call(ZonaSeeder::class);

        $this->call(SubestacionSeeder::class);

        $this->call(EquipoSeeder::class);

        //FACTORIES -------------------------------------------
        Equipo::factory(50)->create();

    }
}
