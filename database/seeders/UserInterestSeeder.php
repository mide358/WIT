<?php

namespace Database\Seeders;

use App\Http\Enums\AccordionEnums;
use App\Http\Enums\StatusEnums;
use App\Models\Accordion;
use App\Models\Course;
use App\Models\Interest;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::mentor()->get();

        $interests = Interest::all();

        $users->each(function ($user) use ($interests) {
            $randomInterests = $interests->random(mt_rand(1, 5)); // Adjust the number of interests per user as needed

            $user->interests()->attach($randomInterests);
        });
    }
}
