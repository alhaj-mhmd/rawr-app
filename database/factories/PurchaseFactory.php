<?php

namespace Database\Factories;

use App\Models\Purchase;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $status = [0,1];
        return [
            // 'date' => $this->faker->dateTime($max = 'now', $timezone = null),
            'date' => $this->faker->dateTimeBetween($startDate = '-1 days', $endDate = 'now', $timezone = null),
            'status' => $this->faker->randomElement($status) ,
            'amount' => $this->faker->randomDigit(),
            'user_id' => $this->faker->randomElement($users),
        ];
    }
}
