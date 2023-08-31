<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'product_name' =>fake()->name(),
            'author'=>fake()->name(),
            'release_date'=>fake()->date(),
        ];
    }
}
