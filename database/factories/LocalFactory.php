<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Local>
 */
class LocalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_local'=>$this->faker->name(),
            'usuario_id'=> Usuario::inRandomOrder()->first(),
            'ubicacion'=>$this->faker->address(),
            'telefono'=>$this->faker->numberBetween(0,9),
            'precio'=>$this->faker->numberBetween(0,9), 
            'capacidad'=>$this->faker->numberBetween(0,9),
            'tamano'=>$this->faker->numberBetween(0,9),
        ];
    }
}
