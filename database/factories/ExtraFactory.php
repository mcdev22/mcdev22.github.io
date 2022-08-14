<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExtraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suppl_name = $this->faker->unique()->words($nb=4,$asText=true);    
        return [          
            'name' => $suppl_name,
            'price'  => $this->faker->numberBetween(37,80),
            'cat_suppl_id'  => $this->faker->numberBetween(1,6)      
        ];
    }
}
