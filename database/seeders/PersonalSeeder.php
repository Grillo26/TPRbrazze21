<?php

namespace Database\Seeders;

use App\Models\personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personal = new personal();
        $personal->nombre_personal="Alejandra Mamani Torrez";
        $personal->telefono_personal="79293949";
        $personal->direccion_personal="Calle San Pedro";
        $personal->id_tipo="2";
        $personal->id_turno="1";
        $personal->save();

        $personal2 = new personal();
        $personal2->nombre_personal="Raul Enrique Mamani Suca";
        $personal2->telefono_personal="71025976";
        $personal2->direccion_personal="Pasillo Warnes esq P. Campero";
        $personal2->id_tipo="1";
        $personal2->id_turno="2";
        $personal2->save();

        $personal3 = new personal();
        $personal3->nombre_personal="Hilda Torrez Flores";
        $personal3->telefono_personal="71025976";
        $personal3->direccion_personal="Pasillo Warnes esq Martin Barroso";
        $personal3->id_tipo="2";
        $personal3->id_turno="2";
        $personal3->save();

        $personal4 = new personal();
        $personal4->nombre_personal="Kevin Zenteno Sensano";
        $personal4->telefono_personal="65264728";
        $personal4->direccion_personal="Av Santos Dumont esq 5to Anillo";
        $personal4->id_tipo="2";
        $personal4->id_turno="2";
        $personal4->save();
    }
}
