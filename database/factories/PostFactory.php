<?php

namespace Database\Factories;

use App\Models\User;
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
        $userIds = \App\Models\User::pluck('id')->toArray();

        return [
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'slug' => fake()->slug(),
            'user_id' => fake()->randomElement($userIds)
        ];
    }
}
