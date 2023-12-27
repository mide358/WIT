<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $j =15;
        $k = [];
        for($i =0; $i < $j; $i++){
            $k[] = [
                'name' => fake()->sentence(),
                'description' => fake()->text(),
                'slug' => fake()->slug(),
                'image' => fake()->image(),
                'duration' => fake()->randomDigit().'wks',
                'price' => fake()->randomFloat(),
            ];
        }
        DB::table('courses')->insert($k);
    }
}
