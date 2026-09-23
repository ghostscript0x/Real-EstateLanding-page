<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Listing;
use App\Models\Testimonial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@terracotta.ng',
        ]);

        // Seed Agents
        $agents = Agent::factory(4)->create();

        // Seed Listings
        Listing::factory(18)->create();

        // Seed Testimonials
        Testimonial::factory(5)->create();
    }
}
