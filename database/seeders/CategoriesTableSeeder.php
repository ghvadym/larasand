<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Rings', 'code' => 'rings', 'description' => 'Rings description'],
            ['name' => 'Bracelets', 'code' => 'bracelets', 'description' => 'Bracelets description'],
            ['name' => 'Necklaces', 'code' => 'necklaces', 'description' => 'Necklaces description'],
            ['name' => 'Earrings', 'code' => 'earrings', 'description' => 'Earrings description'],
        ]);
    }
}
