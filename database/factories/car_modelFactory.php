<?php

namespace Database\Factories;

use App\Models\car_model;
use Illuminate\Database\Eloquent\Factories\Factory;

class car_modelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = car_model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model_name' => $this->faker->word,
            'model_descritpion' => $this->faker->text($maxNbChars = 200)
        ];
    }
}
