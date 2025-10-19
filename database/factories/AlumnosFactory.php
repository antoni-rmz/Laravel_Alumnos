<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Se definen los campos de la tabla alumnos falsos para pruebas
            'codigo' => $this->faker->unique()->numberBetween(100000, 999999),
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'fecha_nacimiento' => $this->faker->date(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'carrera' => $this->faker->randomElement(['Ingeniería', 'Medicina', 'Derecho', 'Arquitectura']),
        ];
    }
}
