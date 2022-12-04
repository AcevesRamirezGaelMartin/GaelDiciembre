<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
        'apellido'=>$this->faker->lastname(),
        'correo'=>$this->faker->email(),
        'contrasena'=>$this->faker->password(),
        'telefono'=>$this->faker->randomElement(['7228634014', '7226395654']),
        ];
    }
}
