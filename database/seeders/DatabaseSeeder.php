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
          \App\Models\User::factory(10)->create();
          \App\Models\Purchase::factory(10)->create();
          \App\Models\Referral::factory(10)->create();
          \App\Models\Reward::factory(10)->create();
          \App\Models\Tier::factory(10)->create();
         
    }
}
