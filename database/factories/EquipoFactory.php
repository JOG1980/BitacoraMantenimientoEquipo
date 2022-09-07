<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            //EJEMPLO ----------------------------------------------------------------------------------
            //al parecer tambien funcionan sin los ()
            //'nombre' => $this->faker->sentence(), //Genera una oracion (una sola linea??)
            //'slug' => Str::slug($this->faker->sentence(),'-'), //generamos el nombre en minusculas y con los espacios se vuelven guiones. Requiere use Illuminate\Support\Str;
            //'descripcion' => $this->faker->text(), //Genera algo "Lorem itsum dolo" ????
            //'parrafo' => $this->faker->paragraph(), //Genera mas de una linea
            //'email' => $this->faker->unique()->safeEmail, //email unico
            //'fecha_inicial' => $this->faker->dateTime($max = 'now', $timezone = null), // DateTime('2008-04-25 08:37:17', 'UTC')
            //'fecha_final' => $this->faker->dateTime($max = 'now', $timezone = null), // DateTime('2008-04-25 08:37:17', 'UTC')
            //'duracion' => rand(1, 48),
            //'uso_catalogo' => $this->faker->randomElement([false,true]), //un elemento aleatorio de los listados
            //'licencia' => '20220122-1234',
            //'licencia' => '20220122-'.str_pad(rand(1,999),4,0,STR_PAD_LEFT), //genera dinamicamente numeros de 4 digitos. STR_PAD_LEFT rellena con ceros a la izquierda
            //'licencia' => rand(2017,2022).''.str_pad(rand(1,12),2,0,STR_PAD_LEFT).''.str_pad(rand(1,29),2,0,STR_PAD_LEFT).'-'.str_pad(rand(1,999),4,0,STR_PAD_LEFT), 
            

            'r3' => rand(100000,9999999),
            'descripcion' => $this->faker->text(),
            'numero_serie' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'id_marca' => rand(1, 30), 
            'id_modelo' => rand(1, 11),
            'id_subestacion' => rand(1, 2),
            'id_estado_equipo' => rand(1, 5), 
            'id_estado_registro' => rand(1, 3), 
            
            
        ];
    }
}
