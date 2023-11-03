<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idpersona' => $this->faker->numberBetween(1, 100), // Ejemplo: ID de persona aleatorio
            'usuario' => $this->faker->userName,
            'clave' => $this->faker->password,
            'habilitado' => $this->faker->randomElement(['Si', 'No']), // Opción aleatoria entre 'Si' y 'No'
            'fecha' => $this->faker->date,
            'idrol' => $this->faker->numberBetween(1, 5), // Ejemplo: ID de rol aleatorio
            'fechacreacion' => $this->faker->dateTimeThisYear,
            'fechamodificacion' => $this->faker->dateTimeThisYear,
            'usuariocreacion' => $this->faker->userName,
            'usuariomodificacion' => $this->faker->userName,
        ];
    }
}
