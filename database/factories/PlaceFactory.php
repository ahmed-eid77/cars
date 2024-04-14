<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        // Generate a place name using Faker's city method
        $placeName = $this->faker->city;

        return [
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'name' => $placeName,
        ];
    }
}
