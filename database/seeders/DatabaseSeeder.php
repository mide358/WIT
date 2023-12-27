<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Enums\AccordionEnums;
use App\Http\Enums\StatusEnums;
use App\Models\Accordion;
use App\Models\Course;
use App\Models\Interest;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(InterestSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(AccordionSeeder::class);
        $this->call(CourseUserSeeder::class);
    }
}
