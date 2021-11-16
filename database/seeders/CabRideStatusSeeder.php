<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CabRideStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cab_ride_status::factory(5)->create();
    }
}
