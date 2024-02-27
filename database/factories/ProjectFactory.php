<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
   public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => collect(range(3, 7))
                ->map(fn ($paragraph) => '<p>'.fake()->paragraph(5).'</p>')
                ->implode(''),
//                'reference' => fake()->numerify('##-###'),
//                'year' => fake()->numberBetween(2000, 2024)
        ];
    }
}
