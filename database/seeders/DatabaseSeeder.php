<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin\Mdl;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AccountSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(MdlSeeder::class);
         \App\Models\Admin\Admin::factory(20)->create();
         \App\Models\Admin\Customer::factory(20)->create();
         \App\Models\Admin\Invoice::factory(20)->create();
         \App\Models\Admin\InvoiceDetails::factory(120)->create();
//         \App\Models\Admin\Mdl::factory(5)->create();

        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //
//                 \App\Models\Admin\Admin::factory()->create([
//                     'name' => fake()->name(),
//                     'email' => fake()->unique()->safeEmail(),
//                     'email_verified_at' => now(),
//                     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//                     'remember_token' => Str::random(10),
//         ]);
    }
}
