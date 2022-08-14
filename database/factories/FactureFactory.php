<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_facture' => $this->faker->bothify('?###??##'),
            'total_tcc'  => $this->faker->numberBetween(1000,2000),
            'id_fourni' => $this->faker->numberBetween(1,4),
            'status' => $this->faker->randomElement(['payed' ,'notpayed'])
        ];
    }
}
