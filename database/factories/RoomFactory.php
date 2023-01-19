<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'room_color' => $this->faker->hexcolor,
            'occupants_gender' => $this->faker->randomElement(['male', 'female']),
            'capacity' => $this->faker->randomDigitNotNull,
        ];
    }
}