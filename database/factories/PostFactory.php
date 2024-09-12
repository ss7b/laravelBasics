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
            'title' => $this->faker->realText(30),
            'author' => $this->faker->name(),
            'body' => $this->faker->realText(600),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
