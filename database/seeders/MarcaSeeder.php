<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $marca1 = new Marca();
        $marca1->nombre_marca = "CISCO";
        $marca1->save();

        $marca2 = new Marca();
        $marca2->nombre_marca = "MOTOROLA";
        $marca2->save();

        $marca3 = new Marca();
        $marca3->nombre_marca = "MATESA";
        $marca3->save();
        
        $marca4 = new Marca();
        $marca4->nombre_marca = "PROLEC";
        $marca4->save();

        $marca5 = new Marca();
        $marca5->nombre_marca = "SIEMENS";
        $marca5->save();

        $marca6 = new Marca();
        $marca6->nombre_marca = "ABB";
        $marca6->save();
        
        $marca7 = new Marca();
        $marca7->nombre_marca = "TAIT";
        $marca7->save();

        $marca8 = new Marca();
        $marca8->nombre_marca = "ALCATEL";
        $marca8->save();

        $marca9 = new Marca();
        $marca9->nombre_marca = "MEXFO";
        $marca9->save();

        $marca10 = new Marca();
        $marca10->nombre_marca = "MOXA";
        $marca10->save();

        $marca11 = new Marca();
        $marca11->nombre_marca = "ARUBA";
        $marca11->save();

        $marca12 = new Marca();
        $marca12->nombre_marca = "ADAM";
        $marca12->save();

        $marca13 = new Marca();
        $marca13->nombre_marca = "MEANWELL";
        $marca13->save();
        
        $marca14 = new Marca();
        $marca14->nombre_marca = "VICA";
        $marca14->save();

        $marca15 = new Marca();
        $marca15->nombre_marca = "EMEISA";
        $marca15->save();

        $marca16 = new Marca();
        $marca16->nombre_marca = "INTERBERG";
        $marca16->save();
        
        $marca17 = new Marca();
        $marca17->nombre_marca = "OTTO";
        $marca17->save();

        $marca18 = new Marca();
        $marca18->nombre_marca = "MEI";
        $marca18->save();

        $marca19 = new Marca();
        $marca19->nombre_marca = "PROXIM";
        $marca19->save();

        $marca20 = new Marca();
        $marca20->nombre_marca = "SEL";
        $marca20->save();

        $marca21 = new Marca();
        $marca21->nombre_marca = "COASTCOM";
        $marca21->save();

        $marca22 = new Marca();
        $marca22->nombre_marca = "ADC TELECOM";
        $marca22->save();

        $marca23 = new Marca();
        $marca23->nombre_marca = "UNIGY";
        $marca23->save();
        
        $marca24 = new Marca();
        $marca24->nombre_marca = "HARRIS";
        $marca24->save();

        $marca25 = new Marca();
        $marca25->nombre_marca = "HP";
        $marca25->save();

        $marca26 = new Marca();
        $marca26->nombre_marca = "TANDBERG";
        $marca26->save();
        
        $marca27 = new Marca();
        $marca27->nombre_marca = "FIBER TWIST";
        $marca27->save();

        $marca28 = new Marca();
        $marca28->nombre_marca = "PHAROS";
        $marca28->save();

        $marca29 = new Marca();
        $marca29->nombre_marca = "12 FO";
        $marca29->save();

        $marca30 = new Marca();
        $marca30->nombre_marca = "UBIQUITI";
        $marca30->save();
    }
}
