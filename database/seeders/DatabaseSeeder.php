<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Project;
use Code16\JockoClient\Eloquent\Media;
use Code16\JockoClient\Support\Database\JockoSeeder;

class DatabaseSeeder extends JockoSeeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->clearMediaDirectory();

        Page::factory()->create([
            'title' => 'Home',
            'key' => 'home',
        ]);

        Page::factory()->create([
            'title' => 'Contact',
            'key' => 'contact',
            'content' => '<p>Some content</p>',
        ]);

        Page::factory()->create([
            'title' => 'About us',
            'key' => 'about',
            'content' => '<p>Some content</p>',
        ]);

        Project::factory()
            ->count(10)
            ->has(Media::factory()->image('cover')->withFile(), 'cover')
            ->has(Media::factory()->image('visuals')->withFile()->count(3), 'visuals')
            ->sequence(fn () => [
                'year' => fake()->numberBetween(2000, 2024),
                'place' => fake()->city,
            ])
            ->create();
    }
}
