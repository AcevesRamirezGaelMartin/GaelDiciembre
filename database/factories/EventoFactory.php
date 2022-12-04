<?php

namespace Database\Factories;

use App\Models\Local;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_evento'=>$this->faker->name(),
            'local_id'=> Local::inRandomOrder()->first(),
            'usuario_id'=> Local::inRandomOrder()->first(),
            'invitaciones'=>$this->faker->randomNumber(5),
            'fecha'=>$this->faker->dateTime(),
            'horario'=>$this->faker->dateTime(), 
            'ubicacion'=>$this->faker->text(50),
        ];
    }
}
