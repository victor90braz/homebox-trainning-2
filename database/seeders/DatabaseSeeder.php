<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        \App\Models\Post::factory(5)->create();

    }
}
