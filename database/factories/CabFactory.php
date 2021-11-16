<?php

namespace Database\Factories;

use App\Models\Cab;
use Illuminate\Database\Eloquent\Factories\Factory;

class CabFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cab::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'license_plate' => mt_rand(100000, 999999),
            'car_model_id' => mt_rand(1000, 9999),
            'manufacture_year' => $this->faker->year,
            'owner_id' => mt_rand(1000, 9999),
            'active' => rand(0, 1),
        ];
    }
}
