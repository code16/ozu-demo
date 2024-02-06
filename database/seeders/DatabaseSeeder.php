<?php

namespace Database\Seeders;

use App\Models\Project;
use Code16\JockoClient\Eloquent\Media;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Project::factory()
            ->has(Media::factory(), 'cover')
            ->has(Media::factory()->count(3), 'visuals')
            ->create();
    }
}
