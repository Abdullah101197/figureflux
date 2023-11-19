<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeederFields extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'company_address',
            'value' => 'Pakistan',
        ]);
        Setting::create(['key' => 'company_phone', 'value' => '+92 xxx xxxxxxx']);
    }
}
