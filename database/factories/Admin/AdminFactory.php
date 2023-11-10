<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Admin>
 */
class AdminFactory extends Factory
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
            'email' => $this->faker->email,
            'email_verified_at' => now(),
            'password' => '$2y$10$piwGSz8otlmiRI1t3XXMBO4m33M8/eExSfBih/QRn1KArIIxMvUdy', // password
            'title' => $this->faker->address,
            'remember_token' => Str::random(10),
        ];
    }
}
