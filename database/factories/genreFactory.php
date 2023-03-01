<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class genreFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(rand(50, 200)),
        ];
    }
}
