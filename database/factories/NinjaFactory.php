<?php

namespace Database\Factories;

use App\Models\Ninja;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;
/**
 * @extends Factory<Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'skill' => fake()->numberBetween(1, 100),
            'dojo_id' => Dojo::inRandomOrder()->first()->id, // Create a new Dojo for each Ninja
        ];
    }
}
