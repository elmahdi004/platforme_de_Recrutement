<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' =>fake()->paragraph(7),
            'gender' =>fake()->randomElement(['male','female']),
            'min_salary' =>rand(8,1000),
            'max_salary' =>rand(1000,10000),
            'salaryType' =>fake()->randomElement(['day','month','year']),
            'experience' =>fake()->randomElement([1,2,3,4,5,10]),
            'deadline' =>fake()->date(),
            'degree' =>fake()->randomElement(['ele 1','ele 2','ele 3','ele 4','ele 5']),
            'career_level' =>fake()->randomElement(['level 1','level 2','level 3','level 4','level 5','level 6','level 7']),
            'job_type' =>fake()->randomElement(['remote','hyprid','on place']),
            'skills_and_experiences' =>fake()->paragraph(2),
            'location' =>fake()->city(),
            'employer_id'=>rand(1,4),
            'status' =>rand(0,1),
            'category_id' =>rand(1,6),
        ];
    }
}
