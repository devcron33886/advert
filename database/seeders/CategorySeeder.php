<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Jobs',
                'slug' => 'jobs',
                'status' => 'available',
            ],
            [
                'name' => 'Tenders',
                'slug' => 'tenders',
                'status' => 'available',
            ],
            [
                'name' => 'Consultancy',
                'slug' => 'consultancy',
                'status' => 'available',
            ],
            [
                'name' => 'Internships',
                'slug' => 'internships',
                'status' => 'available',
            ],
            [
                'name' => 'Public',
                'slug' => 'public',
                'status' => 'available',
            ],
            [
                'name' => 'Auction',
                'slug' => 'auction',
                'status' => 'available',
            ],
            [
                'name' => 'Others',
                'slug' => 'others',
                'status' => 'available',
            ],

        ];

        \App\Models\Category::insert($categories);
    }
}
