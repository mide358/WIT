<?php

namespace Database\Factories;

use App\Http\Enums\RoleEnums;
use App\Http\Enums\StatusEnums;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('Password1$'),
            'phone_number' => fake()->phoneNumber(),
            'status' =>fake()->randomElement($array = array('ENABLED')),
            'role' =>fake()->randomElement($array = array('MENTOR')),
            'profile_photo' => fake()->imageUrl($width = 640, $height = 480),
            'slug' => fake()->slug(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
