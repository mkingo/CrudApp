<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

class MeasurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'client_id'=>Client::factory(),
            'weight'=>$this->faker->randomFloat(2,10,200),
            'height'=>$this->faker->numberBetween(100,200),
            'blood_pressure'=>$this->faker->numberBetween(10,500),
            'sugar'=>$this->faker->numberBetween(1,100)
        ];
    }
}
