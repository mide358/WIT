<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(100)->create();
        $users->each(function ($user) {
            // Create a profile for the user
            Profile::factory()->create([
                'user_id' => $user->id,
                'company' => fake()->company(),
                'job_title' => fake()->jobTitle(),
                'location' => fake()->country(),
                'category_id' => fake()->randomDigit(),
                'bio' => fake()->text(),
                'linkedin' =>fake()->url(),
                'twitter' => fake()->url(),
                'website' => fake()->slug(),
                'experience' => fake()->text(),
                'achievement' => fake()->text()
            ]);

            // Create 4 posts for the user
            Post::factory()->count(4)->create([
                'user_id' => $user->id,
                'title' => fake()->sentence(),
                'description' => fake()->text(),
                'slug' => fake()->slug(),
            ]);

        });
    }
}
