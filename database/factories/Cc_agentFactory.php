<?php

namespace Database\Factories;

use App\Models\Cc_agent;
use Illuminate\Database\Eloquent\Factories\Factory;

class Cc_agentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cc_agent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName
        ];
    }
}
