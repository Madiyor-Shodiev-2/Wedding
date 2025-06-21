<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        return [
            'name'        => fake()->randomElement(\App\Enums\ServiceName::cases())->value,
            'price'       => rand(100, 10000),
            'type'        => fake()->randomElement(\App\Enums\ServiceType::cases())->value,
            'description' => fake()->randomElement(\App\Enums\ServiceDescription::cases())->value,
            'image_id'    => rand(1, 5),
            'venue_id'    => rand(1, 5),
            'telephone'   => $this->faker->phoneNumber,
        ];
    }
}
