<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'client_role' => $this->faker->randomElement(['Homeowner', 'Property Investor', 'CEO', 'Expatriate']),
            'content' => $this->faker->paragraph(2),
            'client_photo_url' => 'https://ui-avatars.com/api/?name=' . urlencode($this->faker->name()) . '&background=F7F2EA&color=241C16',
        ];
    }
}
