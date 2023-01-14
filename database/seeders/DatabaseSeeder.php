<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'avatar' => fake()->imageUrl(300, 300, 'people'),
            'email' => 'hi@jobayer.me',
            'is_admin' => true,
            'password' => bcrypt(123456)
        ]);

        \App\Models\User::factory(48)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'avatar' => fake()->imageUrl(300, 300, 'people'),
            'email' => 'test@example.com',
            'password' => bcrypt(123456)
        ]);

        // Creating Series
        $series = [
            [
                'name' => 'Laravel',
                'image' => 'https://laravel-courses.com/storage/series/54e8baab-727e-4593-a78a-e0c22c569b61.png'
            ],
            [
                'name' => 'PHP',
                'image' => 'https://laravel-courses.com/storage/series/c9cb9b3c-4d8c-4df6-a7b7-54047ce907ad.png'
            ],
            [
                'name' => 'Livewire',
                'image' => 'https://laravel-courses.com/storage/series/4dfa5245-e2fc-4dfe-88c9-5f001a180da6.png'
            ],
            [
                'name' => 'VueJS',
                'image' => 'https://laravel-courses.com/storage/series/7d2e33b5-fcd0-4227-bce6-aa49b976bd7c.png'
            ],
            [
                'name' => 'Alpine JS',
                'image' => 'https://laravel-courses.com/storage/series/fe7d56b4-906c-4970-8c69-25956acb3988.png'
            ],
            [
                'name' => 'Tailwind CSS',
                'image' => 'https://laravel-courses.com/storage/series/e63d6d09-4af0-4a6d-9cee-2daf537afcc8.png'
            ]
        ];
        foreach ($series as $item) {
            $slug = strtolower(str_replace(' ', '-', $item['name']));
            \App\Models\Series::create([
                'name' => $item['name'],
                'slug' => $slug,
                'image' => $item['image']
            ]);
        }

        // Creating Topics
        $topics = ['Eloquent', 'Validation', 'Refactoring', 'Testing'];
        foreach ($topics as $topic) {
            $slug = strtolower(str_replace(' ', '-', $topic));
            \App\Models\Topic::create([
                'name' => $topic,
                'slug' => $slug
            ]);
        }

        // Creating platforms
        $platforms = ['Codecourse', 'YouTube', 'Udemy', 'Laravel Daily', 'Laracasts'];
        foreach ($platforms as $platform) {
            \App\Models\Platform::create([
                'name' => $platform
            ]);
        }

        // Creating Authors
        Author::factory(10)->create();

        // Creating Course
        Course::factory(100)->create();

        // Assign topics to courses
        $courses = Course::all();
        $topics = \App\Models\Topic::all();
        foreach ($courses as $course) {
            $course->topics()->attach(
                $topics->random(rand(1, 4))
            );

            $course->authors()->attach(
                \App\Models\Author::all()->random(rand(1, 2))
            );

            $course->series()->attach(
                \App\Models\Series::all()->random(rand(1, 4))
            );
        }

        // Creating Reviews
        Review::factory(100)->create();
    }
}
