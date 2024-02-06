<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
   public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
//                'reference' => fake()->numerify('##-###'),
//                'year' => fake()->numberBetween(2000, 2024)
        ];
    }
}
