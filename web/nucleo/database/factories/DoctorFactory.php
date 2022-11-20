<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\news>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email'=>fake()->unique()->safeEmail(),
            'nombres'=>fake()->name(),
            'apellidos'=>fake()->name(),
            'telefono'=>$this->faker->sentence(10),
            'genero'=>$this->faker->sentence(20),
            'fecha_n'=>$this->faker->dateTimeBetween('-1 week','+ 10 weeks'),
            'direccion'=>$this->faker->sentence(10),
            'foto'=>$this->faker->sentence(10),
            'especialidad'=>$this->faker->sentence(10),
            'cedula'=>$this->faker->sentence(10),
            'created_at' => $this->faker->dateTimeBetween('-1 week','+ 10 weeks'),
        ];
    }
}
