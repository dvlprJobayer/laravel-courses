<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'avatar' => $this->faker->imageUrl(300, 300, 'people'),
            'description' => $this->faker->paragraph(4),
            'github_link' => $this->faker->url,
            'twitter_link' => $this->faker->url,
            'web_link' => $this->faker->url,
        ];
    }
}
