<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mentors = User::mentor()->get();
        $learners = User::learner()->get();

        foreach ($learners as $learner) {
            $randomMentor = $mentors->random();
            $learner->following()->attach($randomMentor);
        }
    }
}
