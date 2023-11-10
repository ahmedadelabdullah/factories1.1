<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\InvoiceDetails>
 */
class InvoiceDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_id'=>Invoice::all()->random()->id,
            'quantity'=>$this->faker->numberBetween(12 , 150),
            'price'=> $this->faker->numberBetween(250 , 450),
            'description'=>$this->faker->text,
            'sub_total'=>$this->faker->numberBetween(2500 , 50000),
    ];
    }
}
