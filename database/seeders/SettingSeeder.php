<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'title' => 'AKAZI KOSE',
                'phone' => '+250 788 802490',
                'whatsapp' => 'https://api.whatsapp.com/message/KB35O2QXVG3ED1?autoload=1&app_absent=0',
                'address' => 'KIGALI RWANDA',
                'email' => 'info@akazikose.com',
                'twitter' => 'https://x.com/akazi-kose',
                'instagram' => 'https://instagram.com/akazi-kose',
                'facebook' => 'https://facebook.com/akazi-kose',
                'linkedin' => 'https://linkedin/akazi-kose',

            ],

        ];
        Setting::insert($settings);
    }
}
