<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdvertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Advert::factory(150)->create();
    }
}
