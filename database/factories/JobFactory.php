<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('en_US');

        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle,
            'salary' => '$' . number_format($this->faker->numberBetween(30000, 100000)) . ' USD',
            'location' => $this->faker->randomElement(['Remote', 'On-site ' . $this->faker->city]),
            'schedule' => $this->faker->randomElement(['Full-time', 'Part-time']),
            'url' => $this->faker->url,
            'featured' => false,
        ];
    }
}
