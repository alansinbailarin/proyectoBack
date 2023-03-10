<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        "name" => fake()->name(),
        "surname" => fake()->lastName(),
        "email" => fake()->unique()->safeEmail(),
        "phone_number" => fake()->unique()->phoneNumber(),
        "gender" => fake()->randomElement(["M", "F"]),
        "birthdate" => fake()->date()
        ];
    }
}
