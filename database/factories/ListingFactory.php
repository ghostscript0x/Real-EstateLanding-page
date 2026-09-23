<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ListingFactory extends Factory
{
    public function definition(): array
    {
        $locations = [
            'Ikoyi, Lagos', 'Victoria Island, Lagos', 'Lekki Phase 1, Lagos', 
            'Maitama, Abuja', 'Asokoro, Abuja', 'Wuse II, Abuja',
            'Ikeja GRA, Lagos', 'Gwarinpa, Abuja'
        ];

        $titles = [
            'The Ikoyi Pavilion', 'Maitama Heights', 'Asokoro Villa', 
            'Victoria Island Penthouse', 'Lekki Waterfront Terrace',
            'Wuse Modern Apartment', 'Ikeja Classic Duplex',
            'Osborne Foreshore Residence'
        ];

        $title = $this->faker->randomElement($titles) . ' ' . $this->faker->randomNumber(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(3)) . '</p>',
            'location' => $this->faker->randomElement($locations),
            'address' => $this->faker->streetAddress(),
            'type' => $this->faker->randomElement(['house', 'apartment', 'land', 'commercial']),
            'price' => $this->faker->randomFloat(2, 50000000, 1500000000), // 50m to 1.5b Naira
            'status' => $this->faker->randomElement(['available', 'available', 'available', 'sold']), // mostly available
            'bedrooms' => $this->faker->numberBetween(1, 6),
            'bathrooms' => $this->faker->numberBetween(1, 7),
            'size_sqm' => $this->faker->numberBetween(150, 1200),
            'primary_image_url' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
            'gallery_images' => [
                'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
            ],
            'agent_id' => Agent::inRandomOrder()->first()?->id ?? Agent::factory(),
            'is_featured' => $this->faker->boolean(20), // 20% chance
        ];
    }
}
