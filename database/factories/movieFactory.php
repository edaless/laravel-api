<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class movieFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'year' => fake()->year(),

            'cashOut' => ((rand(1, 1000)) * (10 ^ 6)),
            // quanti milioni incassati da uno a 1000

        ];
    }
}
