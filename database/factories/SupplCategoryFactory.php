<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_suplement = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($category_suplement);
        return [
            'name' => $category_suplement,
            'slug' => $slug
        ];
    }
}
