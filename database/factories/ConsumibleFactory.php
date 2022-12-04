<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consumible>
 */
class ConsumibleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sillas'=>$this->faker->randomNumber(5),
            'mesas'=>$this->faker->randomNumber(5),
            'comida'=>$this->faker->randomNumber(5),
            'bebidas'=>$this->faker->randomNumber(5),
            'decoraciones'=>$this->faker->randomNumber(5), 
            'evento_id' => Evento::inRandomorder()->first()->id,
        ];
    }
}
