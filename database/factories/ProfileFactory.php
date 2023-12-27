<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
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
            'user_id' => fake()->randomElement($userIds),
            'company' => fake()->company(),
            'job_title' => fake()->jobTitle(),
            'location' => fake()->country(),
            'category_id' => fake()->randomDigit(),
            'bio' =>fake()->text(),
            'linkedin' =>fake()->url(),
            'twitter' => fake()->url(),
            'website' => fake()->slug(),
            'experience' => fake()->text(),
            'achievement' => fake()->text()
        ];
    }
}
