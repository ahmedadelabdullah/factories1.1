<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            [
                'name' => 'ahmed' ,
                'email' => 'ahmed.git@yahoo.com' ,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' ,
                'type' => 0
            ]
            ,
            [
                'name' => 'admin' ,
                'email' => 'admin.git@yahoo.com' ,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' ,
                'type' => 1
            ]
        ];

        Admin::insert($admin);
    }
}
