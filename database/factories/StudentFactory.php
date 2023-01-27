<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'serial_number' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{8}'),
            'profile_id' => \App\Models\Profile::factory(),
            'career_id' => \App\Models\Career::factory(),
            'group_id' => \App\Models\Group::factory(),
        ];
    }
}
