<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->randomElement(['Senior Partner', 'Real Estate Advisor', 'Property Consultant', 'Broker']),
            'phone' => '+234 ' . $this->faker->numerify('80# ### ####'),
            'email' => $this->faker->unique()->safeEmail(),
            'photo_url' => 'https://ui-avatars.com/api/?name=' . urlencode($this->faker->name()) . '&background=F7F2EA&color=241C16',
            'whatsapp' => '+234' . $this->faker->numerify('80########'),
        ];
    }
}
