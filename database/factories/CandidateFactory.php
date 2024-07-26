<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'email' => fake()->email(),
            'password' => '$2y$10$zVWr9v.zmLpdBC94X1CNC.ip7AuKvB0NgqhpzIWLUjx4bTdZOG1bW',
            'age' => rand(18,50),
            'gender' => fake()->randomElement(['male','female']),
            'about' => fake()->paragraph(2),
            'degree' => 'bachelor degree',
            'cv' => '',
        ];
    }
}
