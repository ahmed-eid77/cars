<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{

    public $images = ['fa fa-phone', 'fa fa-money', 'fa fa-road', 'fa fa-umbrella', 'fa fa-building', 'fa fa-car'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->text(),
            'icon' => fake()->randomElement($this->images),
        ];
    }
}
