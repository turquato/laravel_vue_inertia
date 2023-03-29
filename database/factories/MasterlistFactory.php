<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Masterlist>
 */
class MasterlistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'emp_num' => fake()->numberBetween(1,  99),
            'lname' => fake()->lastName(),
            'fname' => fake()->firstName(),
            'mname' => fake()->lastName(),
            'position' => fake()->numberBetween(1,  7),
            'salarygrade' => fake()->numberBetween(1,  7),
            'office' => fake()->city(),
        ];
    }
}
