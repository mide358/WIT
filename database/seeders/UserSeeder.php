<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(50)->create();
        $countries = Country::pluck('id')->toArray();

        $users->each(function ($user) use($countries) {
            // Create a profile for the user
            $randomNumber = rand(1, 5);


            Profile::factory()->create([
                'user_id' => $user->id,
                'company' => fake()->company(),
                'job_title' => fake()->jobTitle(),
                'country_id' => $randomNumber,
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
