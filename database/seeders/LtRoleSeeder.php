<?php

namespace Database\Seeders;

use App\Models\LtRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LtRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'IdRole' => '1_STF',
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'Description' => 'Staff'
            ],
            [
                'IdRole' => '2_MBR',
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'Description' => 'Member'
            ]
        ];

        LtRole::insert($roles);
    }
}
