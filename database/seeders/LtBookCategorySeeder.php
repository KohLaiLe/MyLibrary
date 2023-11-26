<?php

namespace Database\Seeders;

use App\Models\LtBookCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LtBookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookCategories = [
            [
                'IdBookCategory' => '1_SCIE',
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'Description' => 'Science'
            ],
            [
                'IdBookCategory' => '2_FICT',
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'Description' => 'Fiction'
            ],
            [
                'IdBookCategory' => '3_LANG',
                'UserIn' => 'Mas Randy',
                'DateIn' => now(),
                'Description' => 'Language'
            ]
        ];

        LtBookCategory::insert($bookCategories);
    }
}
