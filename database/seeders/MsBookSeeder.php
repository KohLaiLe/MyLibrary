<?php

namespace Database\Seeders;

use App\Models\MsBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MsBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categories = ['1_SCIE', '2_FICT', '3_LANG'];

        for ($i = 0; $i < 20; $i++){
            $books = [
                [
                    'IdBook' => $faker->uuid,
                    'UserIn' => 'Mas Randy',
                    'Title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'Author' => $faker->name,
                    'ISBN' => $faker->isbn13,
                    'ImageURL' => $faker->imageUrl($width = 200, $height = 300),
                    'IsAvailable' => $faker->boolean,
                    'IdBookCategory' => $faker->randomElement($categories)
                ]
            ];

            MsBook::insert($books);
        }
    }
}
