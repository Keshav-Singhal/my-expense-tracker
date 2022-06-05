<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->sentence, //Generates a fake sentence
            'Amount' => $this->faker->randomNumber(),
            'Description' => $this->faker->paragraph(5), //generates fake 5 paragraphs
        ];
    }
}
