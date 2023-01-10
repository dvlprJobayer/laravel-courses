<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
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
        \App\Models\User::factory(49)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt(123456)
        ]);

        // Creating Series
        $series = ['PHP', 'Laravel', 'Livewire', 'VueJS'];
        foreach ($series as $item) {
            \App\Models\Series::create([
                'name' => $item
            ]);
        }

        // Creating Topics
        $topics = ['Eloquent', 'Validation', 'Refactoring', 'Testing'];
        foreach ($topics as $topic) {
            \App\Models\Topic::create([
                'name' => $topic
            ]);
        }

        // Creating platforms
        $platforms = ['Codecourse', 'YouTube', 'Udemy', 'Laravel Daily', 'Laracasts'];
        foreach ($platforms as $platform) {
            \App\Models\Platform::create([
                'name' => $platform
            ]);
        }

        // Creating Course
        Course::factory(100)->create();
    }
}
