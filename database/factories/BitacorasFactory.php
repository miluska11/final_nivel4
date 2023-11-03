<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bitacoras>
 */
class BitacorasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bitacora' => $this->faker->sentence,
            'idusuario' => $this->faker->numberBetween(1, 100), 
            'fecha' => $this->faker->date,
            'hora' => $this->faker->time,
            'ip' => $this->faker->ipv4,
            'so' => $this->faker->word,
            'navegador' => $this->faker->word,
            'usuario' => $this->faker->userName,
        ];
    }
}
