<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'institution' => fake()->text(20),
            'degree' =>  fake()->randomElement(['SMA', 'D-3', 'D-4 / S1', 'S2']),
            'field_of_study' => fake()->text(30),
            'start_date' => fake()->date('Y-m'),
            'end_date' => fake()->optional()->date('Y-m'),
            'grade' => fake()->randomElement(['3.7', '3.8', '3.9', '4.0']),
            'description' => fake()->text(),
        ];
    }
}
