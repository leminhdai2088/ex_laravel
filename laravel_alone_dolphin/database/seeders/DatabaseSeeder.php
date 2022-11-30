<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  \Illuminate\Support\Facades\DB;
use  \Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'CodeLean',
                'email' => 'CodeLean@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 0,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 0,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 1,
            ],
        ]);

        DB::table('product_category')->insert([
            [
                'id' => 1,
                'name' => 'Men',
                'room_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Women',
                'room_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Kids',
                'room_id' => 1
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'product_category_id' => 2,

                'room_id' => 1,

                'name' => 'Pure Pineapple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'price' => 629.99,
                'qty' => 20,
                'weight' => 1.3,
                'sku' => '00012',
                'featured' => true,
            ],
            [
                'id' => 2,
                'product_category_id' => 2,

                'room_id' => 1,

                'name' => 'Guangzhou sweater',
                'description' => null,
                'price' => 35,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 3,
                'product_category_id' => 2,

                'room_id' => 2,

                'name' => 'Guangzhou sweater',
                'description' => null,
                'price' => 35,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 4,
                'product_category_id' => 1,

                'room_id' => 2,

                'name' => 'Microfiber Wool Scarf',
                'description' => null,
                'price' => 64,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 5,
                'product_category_id' => 3,
                'room_id' => 1,

                'name' => "Men's Painted Hat",
                'description' => null,
                'price' => 44,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => false,
            ],
            [
                'id' => 6,
                'product_category_id' => 2,
                'room_id' => 1,

                'name' => 'Converse Shoes',
                'description' => null,
                'price' => 35,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 7,
                'product_category_id' => 1,
                'room_id' => 1,

                'name' => 'Pure Pineapple',
                'description' => null,
                'price' => 64,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 8,
                'product_category_id' => 1,
                'room_id' => 2,

                'name' => '2 Layer Windbreaker',
                'description' => null,
                'price' => 44,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 9,
                'product_category_id' => 1,
                'room_id' => 1,

                'name' => 'Converse Shoes',
                'description' => null,
                'price' => 35,
                'qty' => 20,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
        ]);



        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'XS',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
        ]);

        DB::table('products_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
        ]);

        DB::table('rooms')->insert([
            [
                'id' => 1,
                'name' => 'Phòng khách',
            ],
            [
                'id' => 2,
                'name' => 'Phòng ngủ',
                // 'image' => 'link.png'
            ]
        ]);

    }
}
