<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\StatusSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            CabRideSeeder::class,
            CabRideStatusSeeder::class,
            CabSeeder::class,
            CarModelSeeder::class,
            CcAgentSeeder::class,
            DriverSeeder::class,
            PaymentTypeSeeder::class,
            ShiftSeeder::class,
            StatusSeeder::class 
        ]);
    }
}
