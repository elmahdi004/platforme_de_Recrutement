<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
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
            'email' => fake()->email(),
            'password' => '$2y$10$zVWr9v.zmLpdBC94X1CNC.ip7AuKvB0NgqhpzIWLUjx4bTdZOG1bW',
            'address' =>fake()->address(),
            'phone_number' =>fake()->phoneNumber(),
            'founded_date' => fake()->date('Y-m-d',Carbon::now()),
            'about' => fake()->paragraph(10),
            'logo' =>fake()->image(),
            'website' =>fake()->url(),
            'company_size' =>fake()->randomElement(['1-10','2-20','50-100','100=1000','+1000']),
            'is_admin' => 0,
        ];
    }
}
