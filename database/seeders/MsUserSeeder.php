<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class MsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $users = [
            [
                'IdUser' => '1_STF_1',
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'Email' => $faker->email,
                'Password' => Hash::make('abc.123'),
                'IdRole' => '1_STF'
            ],
            [
                'IdUser' => '1_MBR_1',
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'Email' => $faker->email,
                'Password' => Hash::make('member'),
                'IdRole' => '2_MBR'
            ]
        ];

        User::insert($users);
    }
}
