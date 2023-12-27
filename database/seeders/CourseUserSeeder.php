<?php

namespace Database\Seeders;

use App\Http\Enums\RoleEnums;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = User::mentor()->get();
        $courses = Course::get();

        $courses->each(function ($course) use ($users) {
            // Select random users to be mentors (20% chance for each user)
            $mentors = $users->random($users->count() * 0.2)->take(3);

            $mentors->each(function ($mentor) use ($course) {
                // Attach the mentors to the course with 'mentor' role
                $course->mentors()->attach($mentor->id, ['type' => RoleEnums::MENTOR->value]);
            });

            // Assign remaining users as learners

        });
    }
}
