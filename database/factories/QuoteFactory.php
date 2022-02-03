<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->realText(100, 3),
            'name' => $this->faker->name()
        ];
    }
}
