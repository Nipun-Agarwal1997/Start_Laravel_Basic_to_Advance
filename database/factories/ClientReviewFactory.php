<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "clientName" => $this->faker->name(),
            "projectType" => $this->faker->name(),
            "review" => $this->faker->text(),
            "image" => $this->faker->text(),
            "rating" => $this->faker->randomElement([1,2,3,4,5]),
            "isActive" => $this->faker->randomElement(['0','1'])
        ];
    }
}
