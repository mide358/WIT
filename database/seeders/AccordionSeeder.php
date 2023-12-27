<?php

namespace Database\Seeders;

use App\Models\Accordion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccordionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accordion::factory()->count(15)->create();

    }
}
