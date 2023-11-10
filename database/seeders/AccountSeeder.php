<?php

namespace Database\Seeders;

use App\Models\Admin\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $account = [
                [
                    'name' => 'general',
                    'start_balance_status' => 'creditor',
                    'current_balance' => 3655000,
                    'active' => 'true',
                ],
            [
                'name' => 'daily',
                'start_balance_status' => 'creditor',
                'current_balance' => 5000,
                'active' => 'true',
            ]
            ,
            [
                'name' => 'customers',
                'start_balance_status' => 'creditor',
                'current_balance' => 1452000,
                'active' => 'true',
            ],
            [
                'name' => 'suppliers',
                'start_balance_status' => 'creditor',
                'current_balance' => 5000,
                'active' => 'true',
            ],
            [
                'name' => 'makers',
                'start_balance_status' => 'creditor',
                'current_balance' => 5000,
                'active' => 'true',
            ],
        ];

        Account::insert($account);
    }
}
