<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'T-shirt',
                'description' => 'Samsung Brand',
                'user_id'=>1,
                'image' => '1.PNG',
                'price' => 30.99,
                'weight'=>0.2
            ],
            [
                'name' => 'Blouse',
                'user_id'=>1,
                'description' => 'Apple Brand',
                'image' => '55.JPEG',
                'price' => 10.99,
                'weight'=>0.3

            ],
            [
                'name' => 'Pants',
                'user_id'=>1,
                'description' => 'Google Pixel Brand',
                'image' => '3.jpg',
                'price' => 64.99,
                'weight'=>0.9

            ],
            [
                'name' => 'SweetPants',
                'user_id'=>1,
                'description' => 'Huawei Brand',
                'image' => '4.png',
                'price' => 84.99,
                'weight'=>1.1

            ],
            [
                'name' => 'Jacket',
                'user_id'=>1,
                'description' => 'Huawei Brand',
                'image' => '4.png',
                'price' => 199.99,
                'weight'=>2.2
            ]
            ,
            [
                'name' => 'shoes',
                'user_id'=>1,
                'description' => 'Huawei Brand',
                'image' => '4.png',
                'price' => 79.99,
                'weight'=>1.3
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
