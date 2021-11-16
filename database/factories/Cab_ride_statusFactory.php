<?php

namespace Database\Factories;

use App\Models\Cab_ride_status;
use Illuminate\Database\Eloquent\Factories\Factory;

class Cab_ride_statusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cab_ride_status::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cab_ride_id' => mt_rand(1000, 9999),
            'status_id' => mt_rand(1000, 9999),
            'status_time' => $this->faker->dateTime(),
            'cc_agent_id' => mt_rand(1000, 9999),
            'shift_id' => mt_rand(1000, 9999),
            'status_details' => $this->faker->sentence()
        ];
    }
}
