<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CabRideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cab_ride::factory(5)->create();
    }
}
