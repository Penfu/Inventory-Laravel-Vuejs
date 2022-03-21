<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Product 1',
                'description' => 'Product 1 description',
                'image' => 'product1.png',
                'type' => 'type 1',
                'quantity' => '10',
                'price' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'description' => 'Product 2 description',
                'image' => 'product2.png',
                'type' => 'type 2',
                'quantity' => '20',
                'price' => '200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 3',
                'description' => 'Product 3 description',
                'image' => 'product3.png',
                'type' => 'type 3',
                'quantity' => '30',
                'price' => '300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
