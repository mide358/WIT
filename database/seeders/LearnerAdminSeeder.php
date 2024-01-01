<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LearnerAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 0; $i <4; $i++){
            $data[] = [
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'username' => fake()->userName(),
                'email' => fake()->randomElement($array = array('ife@gmail.com', 'learner@gmail.com', 'admin@gmail.com', 'moshood@gmail.com', 'ladi@gmail.com', 'shara@gmail.com', 'ope@gmail.com')),
                'password' =>  Hash::make('Password1$'),
                'phone_number' => fake()->phoneNumber(),
                'status' =>fake()->randomElement($array = array('ENABLED')),
                'role' => fake()->randomElement($array = array('LEARNER', 'ADMIN')),
                'profile_photo' => fake()->imageUrl($width = 640, $height = 480),
                'slug' => fake()->slug(),
                'remember_token' => Str::random(10),
            ];
        }
        DB::table('users')->insert($data);
    }
}
