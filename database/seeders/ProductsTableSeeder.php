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
        DB::table('products')->insert([
            ['name' => 'Ring', 'code' => 'ring', 'description' => 'Ring description', 'category_id' => '1', 'price' => '30', 'count' => rand(0, 10)],
            ['name' => 'Bracelet', 'code' => 'bracelet', 'description' => 'Bracelet description', 'category_id' => '2', 'price' => '45', 'count' => rand(0, 10)],
            ['name' => 'Necklace', 'code' => 'necklace', 'description' => 'Necklace description', 'category_id' => '3', 'price' => '60', 'count' => rand(0, 10)],
            ['name' => 'Earring', 'code' => 'earring', 'description' => 'Earring description', 'category_id' => '4', 'price' => '40', 'count' => rand(0, 10)],
        ]);
    }
}
