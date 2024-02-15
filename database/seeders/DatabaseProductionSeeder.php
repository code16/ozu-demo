<?php

namespace Database\Seeders;

use App\Models\Project;
use Code16\JockoClient\Eloquent\Media;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseProductionSeeder extends Seeder
{
    /**
     * Seed the production's database.
     * TODO make this work maybe?
     */
    public function run(): void
    {
        DB::listen(function(QueryExecuted $query) {
            File::append(
                storage_path('/app/query.log'),
                $query->sql . ' [' . implode(', ', $query->bindings) . ']' . PHP_EOL
            );
        });

        DB::beginTransaction();

        Project::factory()
            ->count(5)
            ->create([
                'year' => fake()->numberBetween(2000, 2024),
                'reference' => fake()->numerify('##-###'),
            ]);

        DB::rollBack();
    }
}
