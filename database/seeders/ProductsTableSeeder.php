<?php

namespace Database\Seeders;

use App\Models\Product;
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

        Product::create([
            'name' => 'first product',
            'price' => 1200,
            'description' => 'this is description for first product'
        ]);

        Product::create([
            'name' => 'second product',
            'price' => 2500,
            'description' => 'this is description for second product'
        ]);

        Product::create([
            'name' => 'third product',
            'price' => 4500,
            'description' => 'this is description for third product'
        ]);
    }
}
