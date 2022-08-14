<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(1)->create();
         //\App\Models\Admin::factory(1)->create();
         //\App\Models\Category::factory(6)->create();      
         //\App\Models\SupplCategory::factory(6)->create();
         //\App\Models\Product::factory(15)->create();
         //\App\Models\Extra::factory(12)->create();
         \App\Models\Facture::factory(12)->create();
    }
}
