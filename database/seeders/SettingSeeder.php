<?php

namespace Database\Seeders;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting_1 = Setting::create([
            'site_name' => 'Sandiya Human Resource',
            'site_logo' => '',
            'site_image' => '',
            'site_banner' => '',
        ]);
    }
}
