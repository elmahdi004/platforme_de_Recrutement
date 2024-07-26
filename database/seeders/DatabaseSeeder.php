<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Application;
use App\Models\Candidate;
use App\Models\Employer;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // JobCategory::factory(6)->create();
        // Employer::factory(1)->create();
        // Job::factory(50)->create();
        // Candidate::factory(30)->create();
        Application::factory(1000)->create();

    }
}
