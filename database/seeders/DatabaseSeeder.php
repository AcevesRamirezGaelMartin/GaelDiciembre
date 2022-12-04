<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Consumible;
use App\Models\Evento;
use App\Models\Invitacion;
use App\Models\Local;
use App\Models\Usuario;
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
        Usuario::factory(10)->create();
        Local::factory(10)->create();
        Evento::factory(10)->create();
        Consumible::factory(10)->create(); 
        Invitacion::factory(10)->create();
    }
}
