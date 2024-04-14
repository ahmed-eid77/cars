<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{

    public $images = ['assets/images/cars/01.jpg' ,'assets/images/cars/02.jpg','assets/images/cars/03.jpg', 'assets/images/cars/04.jpg'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'mark' => fake()->name(),
            'price' => fake()->randomFloat(2, 0, 100),
            'doors' => fake()->numberBetween(2, 5),
            'passengers' => fake()->numberBetween(2, 5),
            'luggage' => fake()->numberBetween(2, 5),
            'transmission' => fake()->randomElement(['manual', 'automatic']),
            'air_conditioning' => fake()->randomElement(['yes', 'no']),
            'minimum_age' => fake()->randomNumber(2, true),
            'image' => fake()->randomElement($this->images),
        ];
    }
}
