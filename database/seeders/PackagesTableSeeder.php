<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([

            'plan_name' => 'Basic',
            'price' => 39,
            'features' => 'Chat,Tasks,Documents',
            'package_duration' => 30,
            'Description' => 'Start off strong with everything you need',
            'currency_id' => 4,
            'status' => 1

]);
DB::table('packages')->insert([

    'plan_name' => 'Standard',
    'price' => 99,
    'features' => 'Tasks,Documents,Business,Payments,Accounts,Sales,Suppliers,Purchase,Contracts',
    'package_duration' => 30,
    'Description' => 'Unlock growth potential with more customers',
    'currency_id' => 4,
    'status' => 1,

]);
DB::table('packages')->insert([

    'plan_name' => 'Premium',
    'price' => 339,
    'features' => 'Chat,Tasks,Documents,Business,Payments,Accounts,Sales,Suppliers,Purchase,Contracts,projects,leads,support,knowledgebase,orders,HRM,Calendar,Products & services,Reports,Utilities,Settings',
    'package_duration' => 30,
    'Description' => 'Unleash your pro-level customization potential',
    'currency_id' => 4,
    'status' => 1

]);

}
}
