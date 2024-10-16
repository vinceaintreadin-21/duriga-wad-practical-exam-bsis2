<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Info>
 */
class InfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'gender' =>fake()->randomElement(['Male', 'Female']),
            'contact_number' =>fake()->phoneNumber(),
            'email' =>fake()->email(),
            'password' =>fake()->password()
        ];
    }
}
