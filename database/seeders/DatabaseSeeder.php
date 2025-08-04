<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Project;
use Code16\OzuClient\Eloquent\Media;
use Code16\OzuClient\Support\Database\OzuSeeder;

class DatabaseSeeder extends OzuSeeder
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

        $aboutPage = Page::factory()
            ->has(Media::factory()->image('cover')->withFile(), 'cover')
            ->create([
                'title' => 'Meet the team',
                'key' => 'about',
                'content' => collect(range(2, 4))
                    ->map(fn ($paragraph) => '<p>'.fake()->paragraph(5).'</p>')
                    ->implode(''),
            ]);

        $this->seedImageEmbed($aboutPage, 'content');
        $this->seedVideoEmbed($aboutPage, 'content', 'https://www.youtube.com/watch?v=ZBYZHeB67O4');
        $this->seedQuoteEmbed($aboutPage, 'content', "We're building a new way to create websites without the hassle of overcomplicating things.", 'Code16.');

        Project::factory()
            ->count(12)
            ->has(Media::factory()->image('cover')->withFile(), 'cover')
            ->has(Media::factory()->image('visuals')->withFile()->count(3), 'visuals')
            ->sequence(fn ($sequence) => [
                'order' => $sequence->index + 1,
                'year' => fake()->numberBetween(2000, date('Y')),
                'place' => fake()->city,
            ])
            ->create();
    }
}
