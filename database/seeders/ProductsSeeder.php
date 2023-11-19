<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Basic',
            'unit_price' => 39,
            'category_id' => 1

]);

DB::table('products')->insert([

    'name' => 'Standard',
    'unit_price' => 99,
    'category_id' => 1,

]);

DB::table('products')->insert([

    'name' => 'Premium',
    'unit_price' => 339,
    'category_id' => 1

]);
   }
}
