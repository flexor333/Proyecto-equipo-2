<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Horario;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $h = new Horario(); 
        $h->hora ="7:00-8:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="8:00-9:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="10:00-11:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="11:00-12:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="12:00-1:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="1:00-2:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="2:00-3:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="3:00-4:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="4:00-5:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="5:00-6:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="6:00-7:00";
        $h->save();

        $h = new Horario(); 
        $h->hora ="7:00-8:00";
        $h->save();
    }
}
