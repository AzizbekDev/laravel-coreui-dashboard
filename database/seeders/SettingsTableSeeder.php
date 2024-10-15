<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key'   => 'app_name',
                'value' => 'CoreUI Dashboard',
                'type'  => 'text',
            ],
            [
                'key'   => 'app_description',
                'value' => 'Dashboard starter template built with CoreUI',
                'type'  => 'text'
            ],
            [
                'key'   => 'app_url',
                'value' => 'http://localhost:8000',
                'type'  => 'text'
            ],
            [
                'key'   => 'app_logo',
                'value' => 'brand.svg',
                'type'  => 'file',
            ],
            [
                'key'   => 'app_email',
                'value' => 'info@example.com',
                'type'  => 'text'
            ],
            [
                'key'   => 'app_phone',
                'value' => '+1234567890',
                'type'  => 'text'
            ],
            [
                'key'   => 'profile',
                'value' => 'profile.png',
                'type'  => 'image',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
