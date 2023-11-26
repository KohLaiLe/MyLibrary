<?php

namespace Database\Seeders;

use App\Models\MsMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MsMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $members = [
            [
                'IdMember' => $faker->uuid,
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'FirstName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'Address' => $faker->address,
                'PhoneNumber' => $faker->phoneNumber,
                'IdUser' => '1_MBR_1'
            ]
        ];

        MsMember::insert($members);
    }
}
