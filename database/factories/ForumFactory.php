<?php

namespace Database\Factories;

use App\Http\Enums\StatusEnums;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
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
            'description' => fake()->text(),
            'status' => StatusEnums::ENABLED->value,
            'user_id' => fake()->randomElement($userIds)
        ];
    }
}
