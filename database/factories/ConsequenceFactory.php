<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsequenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Consequence_name' => $this->faker->word,
            'Days_to_complete'=> $this->faker->numberBetween(1, 10),
            'Remarks'=> $this->faker->word
        ];
    }
}