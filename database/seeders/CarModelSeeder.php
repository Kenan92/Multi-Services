<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\car_model::factory(5)->create();
    }
}
