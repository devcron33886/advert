<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutions = [
            [
                'name' => 'Rwanda Revenue Authority',
                'slug' => 'rwanda-revenue-authority',
                'about' => 'ADRA the global humanitarian arm of the Seventh-day Adventist Church—part of the 20-million strong Adventist community, with hundreds of thousands of churches globally and the world’s largest integrated healthcare and education network.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ], [
                'name' => 'Rwanda Ministry of Higher Education',
                'slug' => 'rwanda-ministry-of-higher-education',
                'about' => 'The Rwanda Ministry of Higher Education is a 501(c)3 charitable trust with the mission of providing quality higher education to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ], [
                'name' => 'Rwanda Ministry of Education',
                'slug' => 'rwanda-ministry-of-education',
                'about' => 'The Rwanda Ministry of Education is a 501(c)3 charitable trust with the mission of providing quality education to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ], [
                'name' => 'Rwanda Ministry of Health',
                'slug' => 'rwanda-ministry-of-health',
                'about' => 'The Rwanda Ministry of Health is a 501(c)3 charitable trust with the mission of providing quality health care to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ], [
                'name' => 'Rwanda Ministry of Defense',
                'slug' => 'rwanda-ministry-of-defense',
                'about' => 'The Rwanda Ministry of Culture and Education is a 501(c)3 charitable trust with the mission of providing quality culture and education to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ], [
                'name' => 'Rwanda Ministry of Finance',
                'slug' => 'rwanda-ministry-of-finance',
                'about' => 'The Rwanda Ministry of Finance is a 501(c)3 charitable trust with the mission of providing quality finance to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ], [
                'name' => 'Rwanda Ministry of Energy',
                'slug' => 'rwanda-ministry-of-energy',
                'about' => 'The Rwanda Ministry of Culture and Education is a 501(c)3 charitable trust with the mission of providing quality culture and education to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ],
            [
                'name' => 'Rwanda Ministry of Sport',
                'slug' => 'rwanda-ministry-of-sport',
                'about' => 'The Rwanda Ministry of Culture and Education is a 501(c)3 charitable trust with the mission of providing quality culture and education to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ],
            [
                'name' => 'Rwanda Ministry of Water',
                'slug' => 'rwanda-ministry-of-water',
                'about' => 'The Rwanda Ministry of Culture and Education is a 501(c)3 charitable trust with the mission of providing quality culture and education to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ], [
                'name' => 'Rwanda Ministry of Sanitation',
                'slug' => 'rwanda-ministry-of-sanitation',
                'about' => 'The Rwanda Ministry of Education is a 501(c)3 charitable trust with the mission of providing quality education to Rwanda.',
                'phone_number' => '+250 780 000 000',
                'website' => 'https://example.com',
                'address' => 'Kigali, Rwanda',
            ],

        ];

        foreach ($institutions as $institution) {
            Company::create($institution);
        }
    }
}
