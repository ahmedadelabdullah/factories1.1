<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'phone' =>$this->faker->phoneNumber,
            'address' =>$this->faker->address,
            'initial_balance_status' => 'creditor',
            'initial_balance' => $this->faker->numberBetween(0 , 50000),
            'current_balance'=>$this->faker->numberBetween(0 , 1000000),
            'active' =>'true'
        ];
    }
}
