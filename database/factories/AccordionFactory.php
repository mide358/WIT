<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accordion>
 */
class AccordionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(['COURSE_CURRICULUM', 'FAQS', 'COURSE_FAQS']);
        $course = fake()->randomElement(Course::get()->pluck(['id']));
        return [
            'name' => fake()->sentence,
            'content' => fake()->paragraph,
            'type' => $type,
            'status' => 'Active',
            'parent_id' => $course,
        ];
    }
}
