<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Shift::factory(5)->create();
    }
}
