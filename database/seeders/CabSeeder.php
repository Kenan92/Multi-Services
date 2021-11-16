<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cab::factory(5)->create();
    }
}
