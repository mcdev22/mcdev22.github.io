<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4,$asText=true);      
        return [
            'name' => $product_name,
            'description' => $this->faker->text(100),
            'price'  => $this->faker->numberBetween(37,80),
            'image'  => 'pic_' . $this->faker->unique()->numberBetween(1,15).'.jpg',
            'category_id'  => $this->faker->numberBetween(1,6)
        ];
    }
}
