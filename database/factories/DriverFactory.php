<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale,
            'last_name' => $this->faker->lastName,
            'birth_date' => $this->faker->date($format = 'Y-m-d', $endDate = '-21 years'),
            'driving_licence_number' => mt_rand(100000000000000, 999999999999999),
            'expiry_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+20 years', $timezone = null),
            'working' => rand(0, 1),
        ];
    }
}
