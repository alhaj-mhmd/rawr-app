<?php

namespace Database\Factories;

use App\Models\Referral;
use App\Models\Tier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReferralFactory extends Factory
{/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Referral::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $tiers = Tier::pluck('id')->toArray();
        return [

            'user_id' => $this->faker->randomElement($users),
            'referrer_id' => $this->faker->randomElement($users),
            'tier_id' => $this->faker->randomElement($tiers),
        ];
    }
}
