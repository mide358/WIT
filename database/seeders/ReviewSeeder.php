<?php

namespace Database\Seeders;

use App\Http\Enums\ReviewEnums;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::mentor()->get();

        // Generate reviews for users (adjust the number of reviews as needed)
        $users->each(function ($user) {
            $reviewType = ReviewEnums::MENTOR->value; // or ReviewEnums::COURSE depending on the type

            $review = Review::create([
                'user_id' => $user->id,
                'comment' => 'This is a sample comment for the review.', // Replace with actual comments
                'rating' => rand(1, 5), // Assuming rating can be between 1 to 5
                'type' => $reviewType,
                'parent_id' => null, // For initial reviews (no parent)
                'status' => 'approved'// Or any default status you desire
            ]);
        });
    }
}
