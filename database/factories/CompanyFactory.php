<?php

namespace Database\Factories;

use Faker\Provider\ru_RU\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new PhoneNumber($this->faker));
        return [
            'phone' => $this->faker->unique()->e164PhoneNumber(),
        ];
    }
}
