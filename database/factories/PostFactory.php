<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'slug' => fake()->slug(),
            'is_published' => fake()->boolean(),
            'views' => fake()->numberBetween(0, 1000),
            'likes' => fake()->numberBetween(0, 1000),
        ];
    }
}
