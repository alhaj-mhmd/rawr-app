<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tier;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tier::factory()->count(3)->create();
        Tier::create(['tier' => 'A', 'reward' => 1]);
        Tier::create(['tier' => 'B', 'reward' => 0.5]);
        Tier::create( ['tier' => 'C', 'reward' => 0.2]);
    }
}
