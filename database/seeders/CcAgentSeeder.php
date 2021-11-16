<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CcAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cc_agent::factory(5)->create();
    }
}
