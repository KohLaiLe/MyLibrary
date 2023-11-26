<?php

namespace Database\Seeders;

use App\Models\MsStaff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MsStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $staffs = [
            [
                'IdStaff' => $faker->uuid,
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'FirstName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'IdUser' => '1_STF_1'
            ]
        ];

        MsStaff::insert($staffs);
    }
}
