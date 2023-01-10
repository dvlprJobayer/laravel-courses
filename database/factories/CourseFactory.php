<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'book' => $this->faker->numberBetween(0, 1),
            'year' => $this->faker->numberBetween(2010, 2021),
            'price' => $this->faker->randomFloat(2, 130, 380),
            'image' => $this->faker->imageUrl(640, 480),
            'content' => fake()->paragraph(3),
            'link' => $this->faker->url,
            'submitted_by' => $this->faker->numberBetween(1, 50),
            'duration' => rand(0,2),
            'platform_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
