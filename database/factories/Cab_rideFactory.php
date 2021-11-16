<?php

namespace Database\Factories;

use App\Models\Cab_ride;
use Illuminate\Database\Eloquent\Factories\Factory;

class Cab_rideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cab_ride::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shift_id' => mt_rand(1000, 9999),
            'ride_start_time' => $this->faker->dateTime(),
            'ride_end_time' => $this->faker->dateTime(),
            'address_starting_point' => $this->faker->address(),
            'GPS_starting_point' => $this->faker->latitude($min = -90, $max = 90),
            'address_destination' => $this->faker->address(),
            'GPS_destination' => $this->faker->longitude($min = -180, $max = 180),
            'canceled' => rand(0, 1),
            'payment_type_id' => mt_rand(1000, 9999),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
        ];
    }
}
