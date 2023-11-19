<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingFavIconFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Setting $companyLogo */
        $companyLogo = Setting::where('key', 'company_logo')->firstOrFail();
        $companyLogo->delete();

        $imageUrl = 'assets/images/logo.png';
        Setting::create([
            'key' => 'favicon_icon',
            'value' => $imageUrl,
        ]);
    }
}
