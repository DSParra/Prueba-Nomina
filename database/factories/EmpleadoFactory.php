<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'edad' => $this->faker->numberBetween(18,60),
            'correo' => $this->faker->unique()->safeEmail(),
            'id_puesto' => $this->faker->numberBetween(1,3),
            'isActive' => $this->faker->boolean,
        ];
    }
}
