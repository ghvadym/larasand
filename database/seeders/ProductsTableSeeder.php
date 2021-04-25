<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Ring', 'code' => 'ring', 'description' => 'Ring description', 'category_id' => '1', 'price' => '30'],
            ['name' => 'Bracelet', 'code' => 'bracelet', 'description' => 'Bracelet description', 'category_id' => '1', 'price' => '45'],
            ['name' => 'Necklace', 'code' => 'necklace', 'description' => 'Necklace description', 'category_id' => '1', 'price' => '60'],
            ['name' => 'Earring', 'code' => 'earring', 'description' => 'Earring description', 'category_id' => '1', 'price' => '40'],
        ]);
    }
}
