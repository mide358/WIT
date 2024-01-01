<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LearnerAdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'username' => fake()->userName,
                'email' => fake()->unique()->randomElement(['ife@gmail.com', 'learner@gmail.com', 'admin@gmail.com', 'moshood@gmail.com', 'ladi@gmail.com', 'shara@gmail.com', 'ope@gmail.com']),
                'password' => bcrypt('Password1$'),
                'phone_number' => fake()->phoneNumber,
                'status' => 'ENABLED',
                'role' => fake()->randomElement(['LEARNER', 'ADMIN']),
                'profile_photo' => fake()->imageUrl($width = 640, $height = 480),
                'slug' => fake()->slug,
                'remember_token' => Str::random(10),
            ];
    }
}
