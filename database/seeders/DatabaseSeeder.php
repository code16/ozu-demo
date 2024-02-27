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
            'content' => "<p>We look forward to the opportunity to work with you and embark on a journey to elevate your online presence. Let's create something extraordinary together!</p>",
        ]);

        Page::factory()
            ->has(Media::factory()->image('cover')->withFile(), 'cover')
            ->create([
                'title' => 'Meet the team',
                'key' => 'about',
                'content' => collect(range(2, 4))
                    ->map(fn ($paragraph) => '<p>'.fake()->paragraph(5).'</p>')
                    ->implode(''),
            ]);

        Project::factory()
            ->count(12)
            ->has(Media::factory()->image('cover')->withFile(), 'cover')
            ->has(Media::factory()->image('visuals')->withFile()->count(3), 'visuals')
            ->sequence(fn () => [
                'year' => fake()->numberBetween(2000, date('Y')),
                'place' => fake()->city,
            ])
            ->create();
    }
}
