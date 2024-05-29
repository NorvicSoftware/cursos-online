<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Http\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->postcode(),
            'full_name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'age' => $this->faker->numberBetween(18, 30),
            'address' => $this->faker->country()


        ];
    }
}
