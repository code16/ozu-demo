<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'content' => fake()->paragraph(),
        ];
    }
}
