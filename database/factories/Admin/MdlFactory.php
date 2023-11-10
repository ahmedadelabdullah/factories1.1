<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Mdl>
 */
class MdlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' =>$this->faker->realText(30),
'price' =>$this->faker->numberBetween(280 , 420),
'materials' =>$this->faker->name,
'accessories' =>$this->faker->name,
'colors' =>$this->faker->colorName(),
'image' =>'https://via.placeholder.com',
        ];
    }
}
