<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'body' => $this->faker->paragraph,
            'review_by' => $this->faker->numberBetween(1, 50),
            'course_id' => $this->faker->numberBetween(2, 100),
        ];
    }
}
