<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_number'=>$this->faker->numberBetween(150,10000),
            'date'=>$this->faker->date,
            'customer_id'=> Customer::all()->random()->id,
            'n_o_models'=>$this->faker->numberBetween(5,10),
            'sale_for_one'=>5,
            'total'=>$this->faker->numberBetween(2000,15000),
        ];
    }
}
