<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_name' =>fake()->name(),
            'description' =>fake()->paragraph(),
            'status' =>fake()->randomElement(['successful', 'declined']),
            'total_amount' =>fake()->numberBetween(1, 10000),
            'transaction_number' =>fake()->phoneNumber()
        ];
    }
}
