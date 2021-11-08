<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\Measurement;


class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
          
                return [
                    'name' => $this->faker->name,
                    'email' => $this->faker->email(),
                    'phone' => $this->faker->phoneNumber,
                    'age' => $this->faker->numberBetween(1,100),
                    'gender'=>$this->faker->randomElement(['Male','Female','Others']),
                    'address'=>$this->faker->address()
                ];
            
        
    }
}
