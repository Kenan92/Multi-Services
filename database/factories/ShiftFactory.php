<?php

namespace Database\Factories;

use App\Models\shift;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShiftFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = shift::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'driver_id' => mt_rand(1000, 9999),
            'cab_id' => mt_rand(1000, 9999),
            'shift_start_time' => $this->faker->dateTime(),
            'shift_end_time' => $this->faker->dateTime(),
            'login_time' => $this->faker->dateTime(),
            'logout_time' => $this->faker->dateTime(),
        ];
    }
}
