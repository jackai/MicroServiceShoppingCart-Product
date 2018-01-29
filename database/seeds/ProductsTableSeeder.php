<?php

use Illuminate\Database\Seeder;

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
            'name' => 'name123aa',
            'price' => 123
        ]);
        DB::table('products')->insert([
            'name' => 'name456aa',
            'price' => 456
        ]);
    }
}
