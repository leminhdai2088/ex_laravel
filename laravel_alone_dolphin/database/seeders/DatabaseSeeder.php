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
                'id' => 111,
                'name' => 'Admin',
                'email' => 'adminuit@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 1,
            ],
        ]);

        // DB::table('product_category')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'Men',
        //         'room_id' => 1
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Women',
        //         'room_id' => 1
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Kids',
        //         'room_id' => 1
        //     ],
        // ]);

        // DB::table('products')->insert([
        //     [
        //         'id' => 1,
        //         'product_category_id' => 2,

        //         'room_id' => 1,

        //         'name' => 'Pure Pineapple',
        //         'material' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
        //         'price' => 629.99,
        //         'qty' => 20,
        //         'weight' => 1.3,
        //         'sku' => '00012',
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 2,
        //         'product_category_id' => 2,

        //         'room_id' => 1,

        //         'name' => 'Guangzhou sweater',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 3,
        //         'product_category_id' => 2,

        //         'room_id' => 2,

        //         'name' => 'Guangzhou sweater',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 4,
        //         'product_category_id' => 1,

        //         'room_id' => 2,

        //         'name' => 'Microfiber Wool Scarf',
        //         'material' => null,
        //         'price' => 64,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 5,
        //         'product_category_id' => 3,
        //         'room_id' => 1,

        //         'name' => "Men's Painted Hat",
        //         'material' => null,
        //         'price' => 44,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => false,
        //     ],
        //     [
        //         'id' => 6,
        //         'product_category_id' => 2,
        //         'room_id' => 1,

        //         'name' => 'Converse Shoes',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 7,
        //         'product_category_id' => 1,
        //         'room_id' => 1,

        //         'name' => 'Pure Pineapple',
        //         'material' => null,
        //         'price' => 64,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 8,
        //         'product_category_id' => 1,
        //         'room_id' => 2,

        //         'name' => '2 Layer Windbreaker',
        //         'material' => null,
        //         'price' => 44,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 9,
        //         'product_category_id' => 1,
        //         'room_id' => 1,

        //         'name' => 'Converse Shoes',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        // ]);



        // DB::table('product_details')->insert([
        //     [
        //         'product_id' => 1,
        //         'size' => 'S',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 2,
        //         'size' => 'M',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 3,
        //         'size' => 'L',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 4,
        //         'size' => 'XS',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 5,
        //         'size' => 'S',
        //         'qty' => 0,
        //     ],
        //     [
        //         'product_id' => 6,
        //         'size' => 'S',
        //         'qty' => 0,
        //     ],
        // ]);

        // DB::table('products_images')->insert([
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1.jpg',
        //     ],
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1-1.jpg',
        //     ],
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1-2.jpg',
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path' => 'product-2.jpg',
        //     ],
        //     [
        //         'product_id' => 3,
        //         'path' => 'product-3.jpg',
        //     ],
        //     [
        //         'product_id' => 4,
        //         'path' => 'product-4.jpg',
        //     ],
        //     [
        //         'product_id' => 5,
        //         'path' => 'product-5.jpg',
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path' => 'product-6.jpg',
        //     ],
        //     [
        //         'product_id' => 7,
        //         'path' => 'product-7.jpg',
        //     ],
        //     [
        //         'product_id' => 8,
        //         'path' => 'product-8.jpg',
        //     ],
        //     [
        //         'product_id' => 9,
        //         'path' => 'product-9.jpg',
        //     ],
        // ]);

        // DB::table('rooms')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'PHÒNG KHÁCH - living room',
        //         'link' => 'living_room'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'PHÒNG NGỦ - bedroom',
        //         'link' => 'bed_room'
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'BẾP & PHÒNG ĂN - Kitchen room',
        //         'link' => 'kitchen_room'
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'PHÒNG LÀM VIỆC - home office',
        //         'link' => 'home_office'
        //     ],
        //     [
        //         'id' => 5,
        //         'name' => 'PHÒNG TẮM - bathroom',
        //         'link' => 'bath_room'
        //     ],
            
        // ]);








        DB::table('product_category')->insert([
            [
                'id' => 1,
                'name' => 'SOFA',
                'room_id' => 1
            ],
		    [
                'id' => 2,
                'name' => 'GHẾ',
                'room_id' => 1
            ],
		    [
                'id' => 3,
                'name' => 'KỆ, TỦ TV',
                'room_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'ĐỒNG HỒ',
                'room_id' => 1
            ],
		    [
                'id' => 5,
                'name' => 'TRANH ẢNH',
                'room_id' => 1
            ],
		    [
                'id' => 6,
                'name' => 'GỐI TRANG TRÍ',
                'room_id' => 1
            ],
		    [
                'id' => 7,
                'name' => 'ĐÈN SÀN',
                'room_id' => 1
            ],
		    [
                'id' => 8,
                'name' => 'KỆ, TỦ GIÀY',
                'room_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'GIƯỜNG',
                'room_id' => 2
            ],
		    [
                'id' => 10,
                'name' => 'KỆ/TỦ QUẦN ÁO',
                'room_id' => 2
            ],
		    [
                'id' => 11,
                'name' => 'ĐÈN SÀN',
                'room_id' => 2
            ],
		    [
                'id' => 12,
                'name' => 'BÀN TRANG ĐIỂM',
                'room_id' => 2
            ],
		    [
                'id' => 13,
                'name' => 'ĐÈN BÀN',
                'room_id' => 2
            ],
		    [
                'id' => 14,
                'name' => 'ĐÈN TRANG TRÍ',
                'room_id' => 2
            ],
		    [
                'id' => 15,
                'name' => 'TỦ LƯU TRỮ',
                'room_id' => 2
            ],
		    [
                'id' => 16,
                'name' => 'KỆ/TỦ GIÀY',
                'room_id' => 2
            ],
		    [
                'id' => 17,
                'name' => 'GIÁ/KỆ TREO TRANG TRÍ',
                'room_id' => 2
            ],
		    [
                'id' => 18,
                'name' => 'GƯƠNG',
                'room_id' => 2
            ],
		    [
                'id' => 19,
                'name' => 'BỘ BÀN ĂN',
                'room_id' => 3
            ],
		    [
                'id' => 20,
                'name' => 'BÀN ĂN',
                'room_id' => 3
            ],
		    [
                'id' => 21,
                'name' => 'GHẾ ĂN',
                'room_id' => 3
            ],
		    [
                'id' => 22,
                'name' => 'THẢM BẾP',
                'room_id' => 3
            ],
		    [
                'id' => 23,
                'name' => 'KỆ BẾP',
                'room_id' => 3
            ],
		    [
                'id' => 24,
                'name' => 'KHĂN BẾP',
                'room_id' => 3
            ],
		    [
                'id' => 25,
                'name' => 'BÀN',
                'room_id' => 4
            ],
		    [
                'id' => 26,
                'name' => 'GHẾ',
                'room_id' => 4
            ],
		    [
                'id' => 27,
                'name' => 'ĐÈN BÀN',
                'room_id' => 4
            ],
		    [
                'id' => 28,
                'name' => 'ĐỒNG HỒ',
                'room_id' => 4
            ],
		    [
                'id' => 29,
                'name' => 'VĂN PHÒNG PHẨM',
                'room_id' => 4
            ],
		    [
                'id' => 30,
                'name' => 'BẢNG TRANG TRÍ',
                'room_id' => 4
            ],
		    [
                'id' => 31,
                'name' => 'KỆ/TỦ LƯU TRỮ',
                'room_id' => 4
            ],
		    [
                'id' => 32,
                'name' => 'RÈM',
                'room_id' => 5
            ],
		    [
                'id' => 33,
                'name' => 'KHĂN TẮM',
                'room_id' => 5
            ],
		    [
                'id' => 34,
                'name' => 'GƯƠNG',
                'room_id' => 5
            ],
		    [
                'id' => 35,
                'name' => 'THẢM CHÂN',
                'room_id' => 5
            ],
		    [
                'id' => 36,
                'name' => 'GIÁ, KỆ, TỦ TREO',
                'room_id' => 5
            ]
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'JASMIN',
                'material' => 'Vải Polyester, khung gỗ sồi',
                'price' => 10850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 2,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'RAPUNZEL',
                'material' => 'Vải Polyester, khung gỗ dầu đỏ',
                'price' => 16800000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 3,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'ELENA',
                'material' => 'Vải Polyester, Khung gỗ thông Canada',
                'price' => 5850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 4,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'JOY',
                'material' => 'Vải Polyester, khung gỗ thông Cannada',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 5,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'DUMBO',
                'material' => 'Vải Polyester, khung gỗ dầu đỏ',
                'price' => 6500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 6,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'EZ',
                'material' => 'Ván MFC phủ Melamine',
                'price' => 1100000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 7,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'ABU',
                'material' => 'Khung gỗ dầu đỏ, vải polyester, da tổng hợp',
                'price' => 1375000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 8,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'JOY',
                'material' => 'Khung ghế plywood, Dây thun, Mút RB45 1 lớp dày 2m + Mút F2070 1 lớp dày 2cm + Gòn lớp mặt 1cm, Vải 94% polyester + 6% nylon',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 9,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'MICHAU',
                'material' => 'Khung ghế plywood, Dây thun, Mút RB45 1 lớp dày 2m + Mút F2070 1 lớp dày 2cm + Gòn lớp mặt 1cm, Vải 94% polyester + 6% nylon',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		  [
                'id' => 10,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'OLIVER',
                'material' => 'Khung ghế plywood, Dây thun, Mút RB45 1 lớp dày 2m + Mút F2070 1 lớp dày 2cm + Gòn lớp mặt 1cm, Vải 94% polyester + 6% nylon',
                'price' => 4800000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 11,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'HOBU',
                'material' => 'Chân: Sắt sơn tĩnh điện. Mặt: Gỗ MFC',
                'price' => 2800000,
                'qty' => 172,
                'weight' => '22',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 12,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'JOHY',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 4850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 13,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'DALAT GRACE',
                'material' => 'Gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 4950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 14,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC',
                'price' => 4950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 15,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine, chân gỗ tần bì',
                'price' => 5650000,
                'qty' => 172,
                'weight' => '54.8',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 16,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'KING',
                'material' => 'kính cường lực 3,5mm, khung viền gỗ sồi, kim đồng hồ bằng gỗ óc chó.',
                'price' => 899000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 17,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'QUEEN',
                'material' => 'khung viền plywood, kim đồng hồ bằng gỗ tần bì, kính cường lực.',
                'price' => 799000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 18,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'RABBIT',
                'material' => 'ECO BOARD thân thiện với môi trường',
                'price' => 699000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 19,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'CHESHIRE',
                'material' => 'ECO BOARD thân thiện với môi trường',
                'price' => 720000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 20,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'HATTER',
                'material' => 'ECO BOARD thân thiện với môi trường',
                'price' => 720000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 21,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'MOON',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 199000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 22,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'YOU',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 199000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 23,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'OPIUM',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 280000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 24,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'LIGHTHOUSE',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 280000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 25,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'PEAKS',
                'material' => 'Khung gỗ thông, vải canvas',
                'price' => 380000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 26,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 6',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 27,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 5',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 28,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 4',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 29,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 3',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 30,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 2',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 31,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'NOTI',
                'material' => 'Thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 32,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'LOGLY',
                'material' => 'Thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 33,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'LONICERA',
                'material' => 'Thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 34,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'HEE',
                'material' => 'Sắt sơn tĩnh điện, thủy tinh',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 35,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'TABOB',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: vải',
                'price' => 2250000,
                'qty' => 172,
                'weight' => '5,3',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 36,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'LAM',
                'material' => 'Khung: Sắt sơn tĩnh điện. Mặt: Gỗ MDF chống ẩm.',
                'price' => 1920000,
                'qty' => 172,
                'weight' => '10',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 37,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC phủ Mellamine',
                'price' => 2950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 38,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'ĐỘC LẬP',
                'material' => 'gỗ MFC phủ melamine',
                'price' => 4220000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 39,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, cánh trượt, thép sơn tĩnh điện',
                'price' => 8250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 40,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'DALAT GRACE',
                'material' => 'Gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 4850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 41,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'ĐỘC LẬP',
                'material' => 'thép sơn tĩnh điện, gỗ MFC phủ melamine',
                'price' => 9820000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 42,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'ván MFC phủ Melamine',
                'price' => 9850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 43,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'BEBE',
                'material' => 'Ống thép sơn tĩnh điện. Đệm bọc vải',
                'price' => 1550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 44,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'TABE',
                'material' => 'Đệm bọc vải',
                'price' => 1250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 45,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'LULLABY',
                'material' => 'Khung gỗ dầu đỏ, gỗ plywood, vải polyester',
                'price' => 10500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 46,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'TASOTA',
                'material' => 'Độ dài độ treo 72 cm, ván MFC phủ Melamine',
                'price' => 485000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 47,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'ván MFC phủ Melamine',
                'price' => 16000000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 48,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, cánh trượt, kính cường lực khung nhôm',
                'price' => 20200000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 49,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 9800000,
                'qty' => 172,
                'weight' => '134.6',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 50,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'JOHY',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 7200000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 51,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'LONICERA',
                'material' => 'thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 52,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'HEE',
                'material' => 'Sắt sơn tĩnh điện, thủy tinh',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 53,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'TABOB',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: vải',
                'price' => 2250000,
                'qty' => 172,
                'weight' => '5.3',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 54,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'AQUA',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: hợp kim',
                'price' => 2850000,
                'qty' => 172,
                'weight' => '15.2',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 55,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'ANCO',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: vải',
                'price' => 2250000,
                'qty' => 172,
                'weight' => '5.6',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 56,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC',
                'price' => 1350000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 57,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'M-BINAS',
                'material' => 'Mặt bàn: Gỗ MFC. Chân bàn: Sắt sơn tĩnh điện.',
                'price' => 2750000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 58,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'BUILDER',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 59,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 3250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 60,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, thép sơn tĩnh điện',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 61,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'QUIIN',
                'material' => 'thép sơn tĩnh điện, nhựa',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 62,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'FEECA',
                'material' => 'nhựa',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 63,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'TATAR',
                'material' => 'thủy tinh trắng mờ',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 64,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'SOWN',
                'material' => 'nhựa',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 65,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'WADY',
                'material' => 'nhựa, gỗ plywood',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 66,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'LAMPY',
                'material' => 'dây led màu bạc dễ dàng uốn, tạo dáng trang trí theo ý thích.',
                'price' => 255000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 67,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'MOONLIGHT',
                'material' => 'Nhựa cao cấp PLA.',
                'price' => 690000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 68,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'GRINCH',
                'material' => 'Dùng pin',
                'price' => 155000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 69,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'ARTHUR',
                'material' => 'Cắm nguồn trực tiếp',
                'price' => 495000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 70,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'CARROL',
                'material' => 'Cắm nguồn trực tiếp',
                'price' => 385000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 71,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'EZ',
                'material' => 'Ván MFC phủ Melamine',
                'price' => 490000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                 'id' => 72,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'PAMITI',
                'material' => 'Thép sơn tĩnh điện. khoảng cách khay 23cm, bánh xe quay 360 độ có khóa tiện lợi linh hoạt trong sử dụng hàng ngày, sản phẩm tháo lắp dễ dàng.',
                'price' => 680000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 73,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'TAPI',
                'material' => 'Sắt sơn nhúng, tay nắm giỏ bằng gỗ, bánh xe nhựa',
                'price' => 1080000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 74,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'VITA',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 1290000,
                'qty' => 172,
                'weight' => '6.2',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 75,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'HANDY',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 1590000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 76,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, cánh trượt, thép sơn tĩnh điện',
                'price' => 8250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 77,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'DALAT',
                'material' => 'Gỗ MFC phủ Melamine, cánh MDF sơn 2K, chân gỗ tự nhiên',
                'price' => 6500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 78,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 4850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 79,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine, chân gỗ tần bì',
                'price' => 4250000,
                'qty' => 172,
                'weight' => '35.5',
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 80,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'ĐỘC LẬP',
                'material' => 'gỗ MFC phủ melamine',
                'price' => 4220000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 81,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FIE',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 82,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FEBRI',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 83,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'POPLAR',
                'material' => 'Chân gỗ bạch dương, mặt MFC phủ Melamine',
                'price' => 329000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 84,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FEGO',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 369000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 85,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FELI',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 429000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		    [
                'id' => 86,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'M-TRIBU',
                'material' => 'Khung gỗ tự nhiên/ Nhựa composite',
                'price' => 950000,
                'qty' => 172,
                'weight' => '4',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 87,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'AROU',
                'material' => 'Khung sắt sơn tĩnh điện.',
                'price' => 950000,
                'qty' => 172,
                'weight' => '5',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 88,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'DUKA',
                'material' => 'gương nhập khẩu Thái, dày 5mm, viền gương được mài cạnh tinh tế, đảm bảo an toàn sử dụng.',
                'price' => 1450000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 89,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'HASO',
                'material' => 'gương nhập khẩu Thái, dày 5mm, viền gương được mài cạnh tinh tế, đảm bảo an toàn sử dụng.',
                'price' => 1550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 90,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'UTU',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 390000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 91,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn NOVEN',
                'material' => 'Gỗ tự nhiên',
                'price' => 5550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 92,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn SAGO-LATU',
                'material' => 'Thép không gỉ',
                'price' => 11425000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 93,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn SAGO-MEI',
                'material' => 'Gỗ công nghiệp',
                'price' => 18070000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 94,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn MUSHROOM-TONY',
                'material' => 'Thép không gỉ',
                'price' => 4930000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 95,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn LUKI-DAISY',
                'material' => 'Thép không gỉ',
                'price' => 2350000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 96,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'HONEY Plus',
                'material' => 'chân sắt sơn tĩnh điện, mặt MDF chống ẩm, phủ Mellamine',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 97,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'DALAT',
                'material' => 'Gỗ MDF sơn phủ 2K, chân gỗ tự nhiên',
                'price' => 4500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 98,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'LEHI',
                'material' => 'Chân bàn: Sắt sơn tĩnh điện. Mặt bàn: Gỗ MDF chống ẩm, sơn phủ PU; màu vân gỗ phủ veneer.',
                'price' => 5490000,
                'qty' => 172,
                'weight' => '30.5',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 99,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'HONA',
                'material' => 'Chân bàn: Gỗ cao su. Mặt bàn: Gỗ cao su sơn PU',
                'price' => 5950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 100,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'GROUND',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 3250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 101,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'LATU',
                'material' => 'Chân sắt sơn tĩnh điện, mặt ghế 100% polieste',
                'price' => 1375000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 102,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'NOVEN',
                'material' => 'Gỗ cao su, nệm bọc vải',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 103,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'ASTU',
                'material' => 'Thép sơn tĩnh điện, si bọc nệm',
                'price' => 549000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 104,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'PALAQI',
                'material' => 'Thép sơn tĩnh điện',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 105,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'MINOV',
                'material' => 'chân thép sơn tĩnh điện, mặt bọc nệm si - có tựa',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 106,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'STRIPED',
                'material' => '100% Cotton',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 107,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'LINE',
                'material' => '100% polyester + thermo plastic rubber bottom',
                'price' => 599000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 108,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'FRINGE',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 109,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'WATERFALL',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 110,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'SQUARE',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 111,
                'product_category_id' => 23,
                'room_id' => 3,
                'name' => 'NET',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 690000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 112,
                'product_category_id' => 23,
                'room_id' => 3,
                'name' => 'NET',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 690000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 113,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'CHEVRON',
                'material' => '40% cotton+ 60% polyeste',
                'price' => 109000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 114,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'CLOUDY',
                'material' => '100% Cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 115,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'LITTLE LINE',
                'material' => '100% Cotton',
                'price' => 89000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 116,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'LINE',
                'material' => '100% Cotton',
                'price' => 89000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 117,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'RAINY',
                'material' => '100% Cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 118,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'DOER',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 1550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 119,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'CHIN',
                'material' => 'Mặt gỗ cao su sơn PU, chân gỗ tự nhiên',
                'price' => 880000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 120,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'HONEY',
                'material' => 'chân sắt sơn tĩnh điện, mặt MDF chống ẩm, phủ Mellamine',
                'price' => 2250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 121,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC',
                'price' => 1350000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 122,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'MATCHA',
                'material' => 'Mặt bàn: đá nhân tạo trắng vân mây sơn đen mờ. Chân bàn: Solid surface gia cường sợi thuỷ tinh (Sợi fiberglass) đúc khuôn màu vân đá.',
                'price' => 5900000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 123,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'LATU',
                'material' => 'Chân sắt sơn tĩnh điện, mặt ghế 100% polieste',
                'price' => 1375000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 124,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'TO-BE',
                'material' => 'Lưng nhựa PP cao cấp. Nệm bọc vải. Chân ghế Aluminium sơn tĩnh điện',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 125,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'WINDMILL',
                'material' => 'Chân đế hợp kim nhôm. Mặt ngồi sử dụng da Microfiber. Tay vịn theo sơn tĩnh điện. Cần gạt tăng giảm chiều cao mặt ngồi',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 126,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'NOVEN',
                'material' => 'Gỗ cao su, nệm bọc vải',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 127,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'ASTU',
                'material' => 'Thép sơn tĩnh điện, si bọc nệm',
                'price' => 549000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 128,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'QUIIN',
                'material' => 'thép sơn tĩnh điện, nhựa',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 129,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'WADY',
                'material' => 'nhựa, gỗ plywood',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 130,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'LENOTA',
                'material' => 'Gỗ tự nhiên',
                'price' => 249000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 131,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'KALI',
                'material' => 'Thân đèn: Hợp kim sơn đen. Đế đèn: gỗ công nghiệp. Chao đèn: vải',
                'price' => 1375000,
                'qty' => 172,
                'weight' => '0.8',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 132,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'TITU',
                'material' => 'Hợp kim',
                'price' => 1150000,
                'qty' => 172,
                'weight' => '14',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 133,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'LAYER',
                'material' => 'Stainless Steel.',
                'price' => 1090000,
                'qty' => 172,
                'weight' => '1',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 134,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'LED',
                'material' => 'Nhựa giả gỗ.',
                'price' => 385000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 135,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'NOTA',
                'material' => 'Viền sắt sơn tĩnh điện',
                'price' => 890000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 136,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'HONO',
                'material' => 'Nhựa PP cao cấp',
                'price' => 320000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 137,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'SUN',
                'material' => 'Viền sắt sơn tĩnh điện',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 138,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'Ống đựng bút',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 59000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 139,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'Khay đựng ghim kẹp',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 59000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 140,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'Khay đựng ghi chú',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 59000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 141,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'CIAO',
                'material' => 'Giấy mỹ thuật cao cấp.',
                'price' => 79000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 142,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'LAVIÉ',
                'material' => 'Giấy mỹ thuật cao cấp kết hợp nẹp Alu',
                'price' => 179000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 143,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'SHY',
                'material' => 'Khung: Sắt sơn tĩnh điện. Mặt: Gỗ MDF chống ẩm.',
                'price' => 1920000,
                'qty' => 172,
                'weight' => '12',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 144,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 1590000,
                'qty' => 172,
                'weight' => '10.5',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 145,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'HANDY',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 1590000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 146,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'HOBU',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 1590000,
                'qty' => 172,
                'weight' => '8.5',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 147,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'TAPI',
                'material' => 'Sắt sơn nhúng, tay nắm giỏ bằng gỗ, bánh xe nhựa',
                'price' => 1080000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 148,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'LINE',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 149,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'LAYER',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 150,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'LATTE',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 151,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'FOG 1',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 152,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'CERAMIC',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 153,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'CLOUDY',
                'material' => '100% Cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 154,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'RAINY',
                'material' => '100% Cotton',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 155,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'SNOWY',
                'material' => '100% organic cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 156,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'SUNNY',
                'material' => '100% cotton',
                'price' => 259000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 157,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'WINDY',
                'material' => '100% cotton',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 158,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'LEA',
                'material' => 'Da thật',
                'price' => 1450000,
                'qty' => 172,
                'weight' => '3.5',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 159,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'MEDUSA',
                'material' => 'thép sơn tĩnh điện, kính nhập khẩu cao cấp dày 5mm',
                'price' => 1650000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 160,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'MIBO',
                'material' => 'thép sơn tĩnh điện, kính nhập khẩu cao cấp dày 5mm',
                'price' => 1250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 161,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'CAPO',
                'material' => 'gương nhập khẩu Thái, dày 5mm, viền gương được mài cạnh tinh tế, đảm bảo an toàn sử dụng.',
                'price' => 1150000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 162,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'COBA',
                'material' => 'Nhựa ABS',
                'price' => 1220000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 163,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'STRIPED',
                'material' => '100% Cotton',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 164,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'LINE',
                'material' => '100% polyester + thermo plastic rubber bottom',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 165,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'FRINGE',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 166,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'PARALLEL',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 167,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'WINDOW',
                'material' => '100% polyester + TPR bottom',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 168,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'POD',
                'material' => 'MDF chống ẩm sơn phủ PU.',
                'price' => 1090000,
                'qty' => 172,
                'weight' => '6',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 169,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'PIN',
                'material' => 'Mica, mặt gỗ bần và khung nhựa dày 2cm.',
                'price' => 580000,
                'qty' => 172,
                'weight' => '2.5',
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 170,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'FEDO',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 579000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 171,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'FELI',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 479000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
		[
                'id' => 172,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'POPLAR',
                'material' => 'Chân gỗ bạch dương, mặt MFC phủ Melamine',
                'price' => 379000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ]
        ]);



        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'size' => 'D180/200*R80*C85 cm'
            ],
            [
                'product_id' => 2,
                'size' => 'D240-260*R160/80*C65 cm'
            ],
            [
                'product_id' => 3,
                'size' => 'D205*R90*C80 cm'
            ],
            [
                'product_id' => 4,
                'size' => 'D40*R40*C42 cm'
            ],
            [
                'product_id' => 5,
                'size' => 'D73*R67*C82 cm'
            ],
            [
                'product_id' => 6,
                'size' => 'D80 x R35 x C45 cm'
            ],
		[
                'product_id' => 7,
                'size' => 'D40 x R40 x C45 cm'
            ],
		[
                'product_id' => 8,
                'size' => 'D40 x R40 x C42 cm'
            ],
		[
                'product_id' => 9,
                'size' => 'D72 x R72 x C48 cm'
            ],
		[
                'product_id' => 10,
                'size' => 'D60 x R60 x C45 cm'
            ],
		[
                'product_id' => 11,
                'size' => 'D150 x R45 x C54 cm'
            ],
		[
                'product_id' => 12,
                'size' => 'D160*R40*C50 cm'
            ],
		[
                'product_id' => 13,
                'size' => 'D150 x R40 x C60 cm'
            ],
		[
                'product_id' => 14,
                'size' => 'D150 x R40 x C50 cm'
            ],
		[
                'product_id' => 15,
                'size' => 'D160 x R40 x C62 cm'
            ],
		[
                'product_id' => 16,
                'size' => 'D35.5 x R35.5 x C3 cm'
            ],
		[
                'product_id' => 17,
                'size' => 'D35.6 x R35.6 x C5 cm'
            ],
		[
                'product_id' => 18,
                'size' => 'D29 x R29 x C2.5 cm'
            ],
		[
                'product_id' => 19,
                'size' => 'D28 x R28 x C2.5 cm'
            ],
		[
                'product_id' => 20,
                'size' => 'D29 x R29 x C2.5 cm'
            ],
		[
                'product_id' => 21,
                'size' => '20*30 cm'
            ],
		[
                'product_id' => 22,
                'size' => '20*30 cm'
            ],
		[
                'product_id' => 23,
                'size' => '30*40 cm'
            ],
		[
                'product_id' => 24,
                'size' => '30*40 cm'
            ],
		[
                'product_id' => 25,
                'size' => 'D50x R70x C2.5 cm'
            ],
		[
                'product_id' => 26,
                'size' => '45 x 45 cm'
            ],
		[
                'product_id' => 27,
                'size' => '45 x 45 cm'
            ],
		[
                'product_id' => 28,
                'size' => '45 x 45 cm'
            ],
		[
                'product_id' => 29,
                'size' => '45 x 45 cm'
            ],
		[
                'product_id' => 30,
                'size' => '45 x 45 cm'
            ],
		[
                'product_id' => 31,
                'size' => 'D25 x R23 x C152 cm'
            ],
		[
                'product_id' => 32,
                'size' => 'D35 x R20 x C158 cm'
            ],
		[
                'product_id' => 33,
                'size' => 'D35 x R25 x C163 cm'
            ],
		[
                'product_id' => 34,
                'size' => 'D28 x R28 x C54 cm'
            ],
		[
                'product_id' => 35,
                'size' => 'D34*R34*C154 cm'
            ],
		[
                'product_id' => 36,
                'size' => 'D60 x R30 x H160 cm'
            ],
		[
                'product_id' => 37,
                'size' => 'D80 x R40 x C163 cm'
            ],
		[
                'product_id' => 38,
                'size' => 'D90 x R35 x C107 cm'
            ],
		[
                'product_id' => 39,
                'size' => 'D120 x R35 x C95 cm'
            ],
		[
                'product_id' => 40,
                'size' => 'D90 x R35 x C105 cm'
            ],
		[
                'product_id' => 41,
                'size' => 'Giường 1m4: D208,4 x R150 x C100 cm. Giường 1m6: D208,4 x R170 x C100 cm. Giường 1m8: D208,4 x R190 x C100 cm'
            ],
		[
                'product_id' => 42,
                'size' => 'Giường 1m2: D203.6 x R130.6 x C80 cm. Giường 1m4: D203.6 x R150.6 x C80 cm. Giường 1m6: D203.6 x R170.6 x C80 cm. Giường 1m8: D203.6 x R190.6 x C80 cm.'
            ],
		[
                'product_id' => 43,
                'size' => 'Giường 1m2: D120 x R7 x C55 cm. Giường 1m4: D140 x R7 x C55 cm. Giường 1m6: D160 x R7 x C55 cm. Giường 1m8: D180 x R7 x C55 cm.'
            ],
		[
                'product_id' => 44,
                'size' => 'Giường 1m2: D125 x R6 x C45 cm. Giường 1m4: D145 x R6 x C45 cm. Giường 1m6: D165 x R6 x C45 cm. Giường 1m8: D185 x R6 x C45 cm.'
            ],
		[
                'product_id' => 45,
                'size' => 'Giường 1m6*2m: D214 x R172 x C115 cm. Giường 1m8*2m: D214 x R212 x C115 cm.'
            ],
		[
                'product_id' => 46,
                'size' => 'D98 x R45 x C153 cm'
            ],
		[
                'product_id' => 47,
                'size' => 'Tủ quần áo 1: D120 x R60 x C220 cm. Tủ quần áo 2: D60 x R60 x C220 cm. Hệ tủ quần áo 1: D180 x R60 x C220 cm. Hệ tủ quần áo 2: D240 x R60 x C220 cm'
            ],
		[
                'product_id' => 48,
                'size' => 'D180 x R60 x C235 cm'
            ],
		[
                'product_id' => 49,
                'size' => 'Tủ quần áo 1: D120 x R60 x C235 cm. Tủ quần áo 2: D60 x R60 x C235 cm. Hệ tủ quần áo 3: D120 x R60 x C235 cm. Hệ tủ quần áo 4: D180 x R 60 x C235 cm. Hệ tủ quần áo 5: D240 x R60 x C235 cm'
            ],
		[
                'product_id' => 50,
                'size' => 'D100 x R55 x C220 cm'
            ],
		[
                'product_id' => 51,
                'size' => 'D35 x R25 x C163 cm'
            ],
		[
                'product_id' => 52,
                'size' => 'D28 x R28 x C54 cm'
            ],
		[
                'product_id' => 53,
                'size' => 'D34*R34*C154 cm'
            ],
		[
                'product_id' => 54,
                'size' => 'D38*R120*180 cm'
            ],
		[
                'product_id' => 55,
                'size' => 'D93*R33*C172 cm'
            ],
		[
                'product_id' => 56,
                'size' => 'D80 x R40 x C75 cm'
            ],
		[
                'product_id' => 57,
                'size' => 'D88 x R50 x H88/75 cm'
            ],
		[
                'product_id' => 58,
                'size' => 'D100 x R50 x C75 cm'
            ],
		[
                'product_id' => 59,
                'size' => 'D80 x R40 x C77 cm'
            ],
		[
                'product_id' => 60,
                'size' => 'D90 x R45 x C74 cm'
            ],
		[
                'product_id' => 61,
                'size' => 'D31 x R11 x C38 cm'
            ],
		[
                'product_id' => 62,
                'size' => 'D14,5 x R5,5 x C19.5 cm'
            ],
		[
                'product_id' => 63,
                'size' => 'D15 x R15 x C18 cm'
            ],
		[
                'product_id' => 64,
                'size' => 'D11 x R9 x C21 cm'
            ],
		[
                'product_id' => 65,
                'size' => 'D13 x R11,5 x C23 cm'
            ],
		[
                'product_id' => 66,
                'size' => '3m - 100 led, 6m - 200 led'
            ],
		[
                'product_id' => 67,
                'size' => 'D=15cm hoặc D=20cm.'
            ],
		[
                'product_id' => 68,
                'size' => '1.5m, gồm 10 led '
            ],
		[
                'product_id' => 69,
                'size' => '7.65m, gồm 25 đèn dây tóc, tặng kèm 2 bóng đèn dự phòng'
            ],
		[
                'product_id' => 70,
                'size' => '3m, gồm 10 led'
            ],
		[
                'product_id' => 71,
                'size' => 'D50 x R25 x C50 cm'
            ],
		[
                'product_id' => 72,
                'size' => 'D48 x R27 x C78 cm'
            ],
		[
                'product_id' => 73,
                'size' => 'Kích thước tổng quát: D41 x R29 x C96 cm. Kích thước rổ lớn: D38 x R30 x C36 cm. Kích thước rổ nhỏ: D38 x R29 x C25 cm. Chiều cao kệ (không có rổ) so với mặt đất: 72cm.'
            ],
		[
                'product_id' => 74,
                'size' => 'Kích thước tổng quát: D57 x R43 x C166 cm'
            ],
		[
                'product_id' => 75,
                'size' => 'D52 x R39 x C55 cm'
            ],
		[
                'product_id' => 76,
                'size' => 'D120 x R35 x C95 cm'
            ],
		[
                'product_id' => 77,
                'size' => 'D120 x R35 x C100 cm'
            ],
		[
                'product_id' => 78,
                'size' => 'D90 x R35 x C105 cm'
            ],
		[
                'product_id' => 79,
                'size' => 'D80 x R35 x C102 cm'
            ],
		[
                'product_id' => 80,
                'size' => 'D90 x R35 x C107 cm'
            ],
		[
                'product_id' => 81,
                'size' => 'D60 x R20,7 x C18 cm. Độ dày mặt kệ: 1,8 cm'
            ],
		[
                'product_id' => 82,
                'size' => 'D60 x R21,7 x C19 cm. Độ dày mặt kệ: 1,8 cm'
            ],
		[
                'product_id' => 83,
                'size' => 'D60 x R20 x C18,8 cm. Độ dày mặt kệ: 1,8 cm'
            ],
		[
                'product_id' => 84,
                'size' => 'D61 x R20 x C20 cm. Độ dày mặt kệ: 1,8 cm'
            ],
		[
                'product_id' => 85,
                'size' => 'D60 x R20 x C12 cm. Độ dày mặt kệ: 1,8 cm'
            ],
		[
                'product_id' => 86,
                'size' => 'L70 x W50 X D3'
            ],
		[
                'product_id' => 87,
                'size' => '50 x 50 cm'
            ],
		[
                'product_id' => 88,
                'size' => 'D120 x R52 x C0.5 cm'
            ],
		[
                'product_id' => 89,
                'size' => 'D110 x R50 x C0.5 cm'
            ],
		[
                'product_id' => 90,
                'size' => 'C35 x D18 x R16 cm. Đường kính gương 17cm'
            ],
		[
                'product_id' => 91,
                'size' => 'Kích thước bàn: D120 x R75 x C75 cm. Kích thước ghế: D47 x R53,5 x C77 cm.'
            ],
		[
                'product_id' => 92,
                'size' => 'Kích thước bàn SAGO: D160 x R80 x C75 cm. Kích thước ghế băng SAGO: D140 x R35 x C50 cm. Kích thước LATU: D51 x R59.5 x C76 cm.'
            ],
		[
                'product_id' => 93,
                'size' => 'Kích thước bàn SAGO: D160 x R80 x C75 cm. Kích thước ghế băng SAGO: D140 x R35 x C50 cm. Kích thước MEI: D51 x R59.5 x C76 cm.'
            ],
		[
                'product_id' => 94,
                'size' => 'Kích thước bàn MUSHROOM: Đường kính 60cm, cao 75cm. Kích thước ghế TONY: D52xR45xC86/45 cm.'
            ],
		[
                'product_id' => 95,
                'size' => 'Kích thước bàn LUKI: Đường kính 60cm, cao 72cm. Kích thước ghế DAISY: H80 x D40 x R40 cm.'
            ],
		[
                'product_id' => 96,
                'size' => 'D120 x R75 x C75 cm'
            ],
		[
                'product_id' => 97,
                'size' => 'D105 x R105 x C72 cm'
            ],
		[
                'product_id' => 98,
                'size' => 'H75 x D140 x R80 cm.'
            ],
		[
                'product_id' => 99,
                'size' => 'H73 x D160 x R80 cm'
            ],
		[
                'product_id' => 100,
                'size' => 'D140 x R75 x C75 cm'
            ],
		[
                'product_id' => 101,
                'size' => 'D51 x R59.5 x C76 cm'
            ],
		[
                'product_id' => 102,
                'size' => 'D47 x R53,5 x C77 cm'
            ],
		[
                'product_id' => 103,
                'size' => 'D47.5 x R54 x C79 cm'
            ],
		[
                'product_id' => 104,
                'size' => 'D47.5 x R54 x C79 cm'
            ],
		[
                'product_id' => 105,
                'size' => 'D52 x R55 x C83 cm'
            ],
		[
                'product_id' => 106,
                'size' => '120*70 cm'
            ],
		[
                'product_id' => 107,
                'size' => '140*70 cm'
            ],
		[
                'product_id' => 108,
                'size' => '130*60 cm'
            ],
		[
                'product_id' => 109,
                'size' => '130*60 cm'
            ],
		[
                'product_id' => 110,
                'size' => '70*120 cm'
            ],
		[
                'product_id' => 111,
                'size' => 'D42*R30*C30 cm'
            ],
		[
                'product_id' => 112,
                'size' => 'D42*R30*C30 cm'
            ],
		[
                'product_id' => 113,
                'size' => '30 x 45 cm'
            ],
		[
                'product_id' => 114,
                'size' => '33 x 70 cm'
            ],
		[
                'product_id' => 115,
                'size' => '40 x 60 cm'
            ],
		[
                'product_id' => 116,
                'size' => '40 x 60 cm'
            ],
		[
                'product_id' => 117,
                'size' => '33 x 70 cm'
            ],
		[
                'product_id' => 118,
                'size' => 'D120 x R50 x C75 cm'
            ],
		[
                'product_id' => 119,
                'size' => 'Đường kính 45cm, cao 50cm.'
            ],
		[
                'product_id' => 120,
                'size' => 'D70 x R70 x C75 cm.'
            ],
		[
                'product_id' => 121,
                'size' => 'D80 x R40 x C75 cm.'
            ],
		[
                'product_id' => 122,
                'size' => 'D72 x R72 x C28 cm.'
            ],
		[
                'product_id' => 123,
                'size' => 'D51 x R59.5 x C76 cm.'
            ],
		[
                'product_id' => 124,
                'size' => 'D55,5 x R60 x C79 cm.'
            ],
		[
                'product_id' => 125,
                'size' => 'D59,5 x R47,5 x C78,5 cm.'
            ],
		[
                'product_id' => 126,
                'size' => 'D47 x R53,5 x C77 cm.'
            ],
		[
                'product_id' => 127,
                'size' => 'D47.5 x R54 x C79 cm.'
            ],
		[
                'product_id' => 128,
                'size' => 'D31 x R11 x C38 cm.'
            ],
		[
                'product_id' => 129,
                'size' => 'D13 x R11,5 x C23 cm.'
            ],
		[
                'product_id' => 130,
                'size' => 'D24 x R24 x C29 cm.'
            ],
		[
                'product_id' => 131,
                'size' => 'D25*R25*C50 cm.'
            ],
		[
                'product_id' => 132,
                'size' => 'D16*R50*C57 cm.'
            ],
		[
                'product_id' => 133,
                'size' => '17x 20'
            ],
		[
                'product_id' => 134,
                'size' => 'H4 x D12 x W6'
            ],
		[
                'product_id' => 135,
                'size' => 'Đường kính 30cm, dày 4cm'
            ],
		[
                'product_id' => 136,
                'size' => 'Đường kính 30cm, dày 4cm'
            ],
		[
                'product_id' => 137,
                'size' => 'Đường kính 30cm, dày 4cm'
            ],
		[
                'product_id' => 138,
                'size' => 'H9,5 x D3,5 x W3,5'
            ],
		[
                'product_id' => 139,
                'size' => 'H3 x D4,5 x W4,5'
            ],
		[
                'product_id' => 140,
                'size' => 'H8 x D9 x W9'
            ],
		[
                'product_id' => 141,
                'size' => '13 x 20 cm'
            ],
		[
                'product_id' => 142,
                'size' => '60 x 42 cm treo ốp tường.'
            ],
		[
                'product_id' => 143,
                'size' => 'D60 x R30 x H140'
            ],
		[
                'product_id' => 144,
                'size' => 'D50 x R20 x C80 cm'
            ],
		[
                'product_id' => 145,
                'size' => 'D52 x R39 x C55 cm'
            ],
		[
                'product_id' => 146,
                'size' => 'D50 x R40 x C65 cm'
            ],
		[
                'product_id' => 147,
                'size' => 'Kích thước tổng quát: D41 x R29 x C96 cm. Kích thước rổ lớn: D38 x R30 x C36 cm. Kích thước rổ nhỏ: D38 x R29 x C25 cm. Chiều cao kệ (không có rổ) so với mặt đất: 72cm.'
            ],
		[
                'product_id' => 148,
                'size' => '80 x 180 cm'
            ],
		[
                'product_id' => 149,
                'size' => '180 x 180 cm'
            ],
		[
                'product_id' => 150,
                'size' => '180 x 180 cm'
            ],
		[
                'product_id' => 151,
                'size' => '180 x 180 cm'
            ],
		[
                'product_id' => 152,
                'size' => '180 x 180 cm'
            ],
		[
                'product_id' => 153,
                'size' => '33 x 70 cm'
            ],
		[
                'product_id' => 154,
                'size' => '70 x 140 cm'
            ],
		[
                'product_id' => 155,
                'size' => '33 x 70 cm'
            ],
		[
                'product_id' => 156,
                'size' => '33 x 70 cm'
            ],
		[
                'product_id' => 157,
                'size' => '70 x 140 cm'
            ],
		[
                'product_id' => 158,
                'size' => null
            ],
		[
                'product_id' => 159,
                'size' => 'D45 x R10 x C80 cm'
            ],
		[
                'product_id' => 160,
                'size' => 'D60 x R10 x C45 cm'
            ],
		[
                'product_id' => 161,
                'size' => 'D67 x R60 x C0.5 cm'
            ],
		[
                'product_id' => 162,
                'size' => 'C32 x D24 x R16 cm. Đường kính gương 15cm'
            ],
		[
                'product_id' => 163,
                'size' => '60 x 90 cm'
            ],
		[
                'product_id' => 164,
                'size' => '50 x 80 cm'
            ],
		[
                'product_id' => 165,
                'size' => '60 x 90 cm'
            ],
		[
                'product_id' => 166,
                'size' => '60 x 90 cm'
            ],
		[
                'product_id' => 167,
                'size' => '50 x 80 cm'
            ],
		[
                'product_id' => 168,
                'size' => 'H70 x D50 x W2'
            ],
		[
                'product_id' => 169,
                'size' => 'H50 x D70 x W4'
            ],
		[
                'product_id' => 170,
                'size' => 'D60 x R20 x C11 cm. Độ dày mặt kệ: 2.5 cm'
            ],
		[
                'product_id' => 171,
                'size' => 'D60 x R20 x C12 cm. Độ dày mặt kệ: 2.5 cm'
            ],
		[
                'product_id' => 172,
                'size' => 'D60 x R20 x C19,5 cm. Độ dày mặt kệ: 2.5 cm'
            ]
        ]);

        DB::table('products_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.webp',
            ],
		[
                'product_id' => 1,
                'path' => 'product-1-3.webp',
            ],
		[
                'product_id' => 1,
                'path' => 'product-1-4.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.webp',
            ],
		[
                'product_id' => 2,
                'path' => 'product-2-1.webp',
            ],
		[
                'product_id' => 2,
                'path' => 'product-2-2.webp',
            ],
		[
                'product_id' => 2,
                'path' => 'product-2-3.webp',
            ],
		[
                'product_id' => 2,
                'path' => 'product-2-4.webp',
            ],
		[
                'product_id' => 2,
                'path' => 'product-2-5.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.webp',
            ],
		[
                'product_id' => 3,
                'path' => 'product-3-1.webp',
            ],
		[
                'product_id' => 3,
                'path' => 'product-3-2.webp',
            ],
		[
                'product_id' => 3,
                'path' => 'product-3-3.webp',
            ],
		[
                'product_id' => 3,
                'path' => 'product-3-4.webp',
            ],
		[
                'product_id' => 3,
                'path' => 'product-3-5.webp',
            ],
		[
                'product_id' => 3,
                'path' => 'product-3-6.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-1.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-2.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-3.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-4.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-5.jpg',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-6.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-7.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-8.webp',
            ],
		[
                'product_id' => 4,
                'path' => 'product-4-9.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.webp',
            ],
		[
                'product_id' => 5,
                'path' => 'product-5-1.webp',
            ],
		[
                'product_id' => 5,
                'path' => 'product-5-2.webp',
            ],
		[
                'product_id' => 5,
                'path' => 'product-5-3.webp',
            ],
		[
                'product_id' => 5,
                'path' => 'product-5-4.webp',
            ],
		[
                'product_id' => 5,
                'path' => 'product-5-5.webp',
            ],
		[
                'product_id' => 5,
                'path' => 'product-5-6.webp',
            ],
		[
                'product_id' => 5,
                'path' => 'product-5-7.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-1.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-2.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-3.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-4.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-5.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-6.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-7.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-8.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-9.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-10.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-6-11.webp',
            ],
		[
                'product_id' => 6,
                'path' => 'product-12.webp',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.webp',
            ],
		[
                'product_id' => 7,
                'path' => 'product-7-1.webp',
            ],
		[
                'product_id' => 7,
                'path' => 'product-7-2.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-1.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-2.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-3.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-4.jpg',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-5.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-6.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-7.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-8.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-9.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-10.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-11.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-12.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-13.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-14.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-15.webp',
            ],
		[
                'product_id' => 8,
                'path' => 'product-8-16.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.webp',
            ],
		[
                'product_id' => 9,
                'path' => 'product-9-1.webp',
            ],
		[
                'product_id' => 9,
                'path' => 'product-9-2.webp',
            ],
		[
                'product_id' => 9,
                'path' => 'product-9-3.webp',
            ],
		[
                'product_id' => 9,
                'path' => 'product-9-4.webp',
            ],
		[
                'product_id' => 10,
                'path' => 'product-10.webp',
            ],
		[
                'product_id' => 10,
                'path' => 'product-10-1.webp',
            ],
		[
                'product_id' => 10,
                'path' => 'product-10-2.webp',
            ],
		[
                'product_id' => 10,
                'path' => 'product-10-3.webp',
            ],
		[
                'product_id' => 10,
                'path' => 'product-10-4.webp',
            ],
		[
                'product_id' => 10,
                'path' => 'product-10-5.webp',
            ],
		[
                'product_id' => 10,
                'path' => 'product-10-6.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-1.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-2.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-3.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-4.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-5.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-6.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-7.webp',
            ],
		[
                'product_id' => 11,
                'path' => 'product-11-8.webp',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12.webp',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-1.jpg',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-2.jpg',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-3.webp',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-4.webp',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-5.webp',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-6.webp',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-7.webp',
            ],
		[
                'product_id' => 12,
                'path' => 'product-12-8.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13-1.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13-2.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13-3.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13-4.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13-5.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13-6.webp',
            ],
		[
                'product_id' => 13,
                'path' => 'product-13-7.webp',
            ],
		[
                'product_id' => 14,
                'path' => 'product-14.webp',
            ],
		[
                'product_id' => 14,
                'path' => 'product-14-1.webp',
            ],
		[
                'product_id' => 14,
                'path' => 'product-14-2.webp',
            ],
		[
                'product_id' => 14,
                'path' => 'product-14-3.webp',
            ],
		[
                'product_id' => 14,
                'path' => 'product-14-4.webp',
            ],
		[
                'product_id' => 14,
                'path' => 'product-14-5.webp',
            ],
		[
                'product_id' => 15,
                'path' => 'product-15.webp',
            ],
		[
                'product_id' => 15,
                'path' => 'product-15-1.webp',
            ],
		[
                'product_id' => 15,
                'path' => 'product-15-2.webp',
            ],
		[
                'product_id' => 15,
                'path' => 'product-15-3.webp',
            ],
		[
                'product_id' => 15,
                'path' => 'product-15-4.webp',
            ],
		[
                'product_id' => 15,
                'path' => 'product-15-5.webp',
            ],
		[
                'product_id' => 15,
                'path' => 'product-15-6.webp',
            ],
		[
                'product_id' => 16,
                'path' => 'product-16.webp',
            ],
		[
                'product_id' => 16,
                'path' => 'product-16-1.webp',
            ],
		[
                'product_id' => 16,
                'path' => 'product-16-2.webp',
            ],
		[
                'product_id' => 16,
                'path' => 'product-16-3.webp',
            ],
		[
                'product_id' => 16,
                'path' => 'product-16-4.webp',
            ],
		[
                'product_id' => 16,
                'path' => 'product-16-5.webp',
            ],
		[
                'product_id' => 17,
                'path' => 'product-17.webp',
            ],
		[
                'product_id' => 17,
                'path' => 'product-17-1.webp',
            ],
		[
                'product_id' => 17,
                'path' => 'product-17-2.webp',
            ],
		[
                'product_id' => 17,
                'path' => 'product-17-3.webp',
            ],
		[
                'product_id' => 17,
                'path' => 'product-17-4.webp',
            ],
		[
                'product_id' => 17,
                'path' => 'product-17-5.webp',
            ],
		[
                'product_id' => 18,
                'path' => 'product-18.webp',
            ],
		[
                'product_id' => 18,
                'path' => 'product-18-1.webp',
            ],
		[
                'product_id' => 18,
                'path' => 'product-18-2.webp',
            ],
		[
                'product_id' => 18,
                'path' => 'product-18-3.webp',
            ],
		[
                'product_id' => 18,
                'path' => 'product-18-4.webp',
            ],
		[
                'product_id' => 18,
                'path' => 'product-18-5.webp',
            ],
		[
                'product_id' => 19,
                'path' => 'product-19.webp',
            ],
		[
                'product_id' => 19,
                'path' => 'product-19-1.webp',
            ],
		[
                'product_id' => 19,
                'path' => 'product-19-2.webp',
            ],
		[
                'product_id' => 19,
                'path' => 'product-19-3.webp',
            ],
		[
                'product_id' => 19,
                'path' => 'product-19-4.webp',
            ],
		[
                'product_id' => 19,
                'path' => 'product-19-5.webp',
            ],
		[
                'product_id' => 20,
                'path' => 'product-20.webp',
            ],
		[
                'product_id' => 20,
                'path' => 'product-20-1.webp',
            ],
		[
                'product_id' => 20,
                'path' => 'product-20-2.webp',
            ],
		[
                'product_id' => 20,
                'path' => 'product-20-3.webp',
            ],
		[
                'product_id' => 20,
                'path' => 'product-20-4.webp',
            ],
		[
                'product_id' => 20,
                'path' => 'product-20-5.webp',
            ],
		[
                'product_id' => 21,
                'path' => 'product-21.webp',
            ],
		[
                'product_id' => 21,
                'path' => 'product-21-1.webp',
            ],
		[
                'product_id' => 21,
                'path' => 'product-21-2.webp',
            ],
		[
                'product_id' => 22,
                'path' => 'product-22.webp',
            ],
		[
                'product_id' => 22,
                'path' => 'product-22-1.webp',
            ],
		[
                'product_id' => 22,
                'path' => 'product-22-2.webp',
            ],
		[
                'product_id' => 23,
                'path' => 'product-23.webp',
            ],
		[
                'product_id' => 23,
                'path' => 'product-23-1.webp',
            ],
		[
                'product_id' => 23,
                'path' => 'product-23-2.webp',
            ],
		[
                'product_id' => 24,
                'path' => 'product-24.webp',
            ],
		[
                'product_id' => 24,
                'path' => 'product-24-1.webp',
            ],
		[
                'product_id' => 24,
                'path' => 'product-24-2.webp',
            ],
		[
                'product_id' => 25,
                'path' => 'product-25.webp',
            ],
		[
                'product_id' => 25,
                'path' => 'product-25-1.webp',
            ],
		[
                'product_id' => 25,
                'path' => 'product-25-2.webp',
            ],
		[
                'product_id' => 25,
                'path' => 'product-25-3.webp',
            ],
		[
                'product_id' => 26,
                'path' => 'product-26.webp',
            ],
		[
                'product_id' => 26,
                'path' => 'product-26-1.webp',
            ],
		[
                'product_id' => 26,
                'path' => 'product-26-2.webp',
            ],
		[
                'product_id' => 26,
                'path' => 'product-26-3.webp',
            ],
		[
                'product_id' => 26,
                'path' => 'product-26-4.webp',
            ],
		[
                'product_id' => 27,
                'path' => 'product-27.webp',
            ],
		[
                'product_id' => 27,
                'path' => 'product-27-1.jpg',
            ],
		[
                'product_id' => 27,
                'path' => 'product-27-2.webp',
            ],
		[
                'product_id' => 27,
                'path' => 'product-27-3.webp',
            ],
		[
                'product_id' => 28,
                'path' => 'product-28.webp',
            ],
		[
                'product_id' => 28,
                'path' => 'product-28-1.webp',
            ],
		[
                'product_id' => 28,
                'path' => 'product-28-2.webp',
            ],
		[
                'product_id' => 28,
                'path' => 'product-28-3.webp',
            ],
		[
                'product_id' => 28,
                'path' => 'product-28-4.webp',
            ],
		[
                'product_id' => 28,
                'path' => 'product-28-5.webp',
            ],
		[
                'product_id' => 29,
                'path' => 'product-29.webp',
            ],
		[
                'product_id' => 29,
                'path' => 'product-29-1.webp',
            ],
		[
                'product_id' => 29,
                'path' => 'product-29-2.webp',
            ],
		[
                'product_id' => 29,
                'path' => 'product-29-3.webp',
            ],
		[
                'product_id' => 29,
                'path' => 'product-29-4.webp',
            ],
		[
                'product_id' => 30,
                'path' => 'product-30.webp',
            ],
		[
                'product_id' => 30,
                'path' => 'product-30-1.webp',
            ],
		[
                'product_id' => 30,
                'path' => 'product-30-2.webp',
            ],
		[
                'product_id' => 30,
                'path' => 'product-30-3.webp',
            ],
		[
                'product_id' => 31,
                'path' => 'product-31.webp',
            ],
		[
                'product_id' => 31,
                'path' => 'product-31-1.webp',
            ],
		[
                'product_id' => 31,
                'path' => 'product-31-2.webp',
            ],
		[
                'product_id' => 31,
                'path' => 'product-31-3.jpg',
            ],
		[
                'product_id' => 31,
                'path' => 'product-31-4.webp',
            ],
		[
                'product_id' => 31,
                'path' => 'product-31-5.webp',
            ],
		[
                'product_id' => 31,
                'path' => 'product-31-6.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32-1.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32-2.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32-3.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32-4.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32-5.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32-6.webp',
            ],
		[
                'product_id' => 32,
                'path' => 'product-32-7.webp',
            ],
		[
                'product_id' => 33,
                'path' => 'product-33.webp',
            ],
		[
                'product_id' => 33,
                'path' => 'product-33-1.webp',
            ],
		[
                'product_id' => 33,
                'path' => 'product-33-2.webp',
            ],
		[
                'product_id' => 33,
                'path' => 'product-33-3.webp',
            ],
		[
                'product_id' => 34,
                'path' => 'product-34.webp',
            ],
		[
                'product_id' => 34,
                'path' => 'product-34-1.webp',
            ],
		[
                'product_id' => 34,
                'path' => 'product-34-2.webp',
            ],
		[
                'product_id' => 34,
                'path' => 'product-34-3.webp',
            ],
		[
                'product_id' => 34,
                'path' => 'product-34-4.webp',
            ],
		[
                'product_id' => 35,
                'path' => 'product-35.webp',
            ],
		[
                'product_id' => 35,
                'path' => 'product-35-1.webp',
            ],
		[
                'product_id' => 35,
                'path' => 'product-35-2.webp',
            ],
		[
                'product_id' => 35,
                'path' => 'product-35-3.webp',
            ],
		[
                'product_id' => 35,
                'path' => 'product-35-4.webp',
            ],
		[
                'product_id' => 35,
                'path' => 'product-35-5.webp',
            ],
		[
                'product_id' => 35,
                'path' => 'product-35-6.webp',
            ],
		[
                'product_id' => 36,
                'path' => 'product-36.webp',
            ],
		[
                'product_id' => 36,
                'path' => 'product-36-1.webp',
            ],
		[
                'product_id' => 36,
                'path' => 'product-36-2.webp',
            ],
		[
                'product_id' => 36,
                'path' => 'product-36-3.webp',
            ],
		[
                'product_id' => 36,
                'path' => 'product-36-4.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-1.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-2.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-3.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-4.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-5.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-6.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-7.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-8.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-9.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-10.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-11.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-12.webp',
            ],
		[
                'product_id' => 37,
                'path' => 'product-37-13.webp',
            ],
		[
                'product_id' => 38,
                'path' => 'product-38.webp',
            ],
		[
                'product_id' => 38,
                'path' => 'product-38-1.webp',
            ],
		[
                'product_id' => 38,
                'path' => 'product-38-2.webp',
            ],
		[
                'product_id' => 38,
                'path' => 'product-38-3.webp',
            ],
		[
                'product_id' => 38,
                'path' => 'product-38-4.webp',
            ],
		[
                'product_id' => 38,
                'path' => 'product-38-5.webp',
            ],
		[
                'product_id' => 39,
                'path' => 'product-39.webp',
            ],
		[
                'product_id' => 39,
                'path' => 'product-39-1.webp',
            ],
		[
                'product_id' => 39,
                'path' => 'product-39-2.png',
            ],
		[
                'product_id' => 39,
                'path' => 'product-39-3.png',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40.webp',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40-1.webp',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40-2.webp',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40-3.webp',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40-4.webp',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40-5.webp',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40-6.webp',
            ],
		[
                'product_id' => 40,
                'path' => 'product-40-7.webp',
            ],
		[
                'product_id' => 41,
                'path' => 'product-41-1.webp',
            ],
		[
                'product_id' => 41,
                'path' => 'product-41-2.jpg',
            ],
		[
                'product_id' => 41,
                'path' => 'product-41-3.webp',
            ],
		[
                'product_id' => 41,
                'path' => 'product-41-4.webp',
            ],
		[
                'product_id' => 41,
                'path' => 'product-41-5.webp',
            ],
		[
                'product_id' => 41,
                'path' => 'product-41-6.webp',
            ],
		[
                'product_id' => 41,
                'path' => 'product-41-7.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-1.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-2.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-3.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-4.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-5.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-6.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-7.webp',
            ],
		[
                'product_id' => 42,
                'path' => 'product-42-8.webp',
            ],
		[
                'product_id' => 43,
                'path' => 'product-43.webp',
            ],
		[
                'product_id' => 43,
                'path' => 'product-43-1.webp',
            ],
		[
                'product_id' => 43,
                'path' => 'product-43-2.webp',
            ],
		[
                'product_id' => 43,
                'path' => 'product-43-3.webp',
            ],
		[
                'product_id' => 43,
                'path' => 'product-43-4.webp',
            ],
		[
                'product_id' => 43,
                'path' => 'product-43-5.webp',
            ],
		[
                'product_id' => 43,
                'path' => 'product-43-6.webp',
            ],
		[
                'product_id' => 44,
                'path' => 'product-44.webp',
            ],
		[
                'product_id' => 44,
                'path' => 'product-44-1.webp',
            ],
		[
                'product_id' => 44,
                'path' => 'product-44-2.webp',
            ],
		[
                'product_id' => 44,
                'path' => 'product-44-3.webp',
            ],
		[
                'product_id' => 44,
                'path' => 'product-44-4.webp',
            ],
		[
                'product_id' => 44,
                'path' => 'product-44-5.webp',
            ],
		[
                'product_id' => 44,
                'path' => 'product-44-6.webp',
            ],
		[
                'product_id' => 45,
                'path' => 'product-45.webp',
            ],
		[
                'product_id' => 45,
                'path' => 'product-45-1.webp',
            ],
		[
                'product_id' => 45,
                'path' => 'product-45-2.webp',
            ],
		[
                'product_id' => 45,
                'path' => 'product-45-3.webp',
            ],
		[
                'product_id' => 45,
                'path' => 'product-45-4.webp',
            ],
		[
                'product_id' => 45,
                'path' => 'product-45-5.webp',
            ],
		[
                'product_id' => 45,
                'path' => 'product-45-6.webp',
            ],
		[
                'product_id' => 46,
                'path' => 'product-46.webp',
            ],
		[
                'product_id' => 46,
                'path' => 'product-46-1.webp',
            ],
		[
                'product_id' => 46,
                'path' => 'product-46-2.webp',
            ],
		[
                'product_id' => 46,
                'path' => 'product-46-3.webp',
            ],
		[
                'product_id' => 46,
                'path' => 'product-46-4.webp',
            ],
		[
                'product_id' => 46,
                'path' => 'product-46-5.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-1.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-2.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-3.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-4.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-5.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-6.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-7.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-8.webp',
            ],
		[
                'product_id' => 47,
                'path' => 'product-47-9.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-1.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-2.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-3.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-4.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-5.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-6.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-7.webp',
            ],
		[
                'product_id' => 48,
                'path' => 'product-48-8.webp',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49.webp',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49-1.webp',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49-2.webp',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49-3.webp',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49-4.webp',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49-5.webp',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49-6.png',
            ],
		[
                'product_id' => 49,
                'path' => 'product-49-7.webp',
            ],
		[
                'product_id' => 50,
                'path' => 'product-50.webp',
            ],
		[
                'product_id' => 50,
                'path' => 'product-50-1.png',
            ],
		[
                'product_id' => 50,
                'path' => 'product-50-2.png',
            ],
		[
                'product_id' => 50,
                'path' => 'product-50-3.webp',
            ],
		[
                'product_id' => 51,
                'path' => 'product-51.webp',
            ],
		[
                'product_id' => 51,
                'path' => 'product-51-1.webp',
            ],
		[
                'product_id' => 51,
                'path' => 'product-51-2.webp',
            ],
		[
                'product_id' => 51,
                'path' => 'product-51-3.webp',
            ],
		[
                'product_id' => 52,
                'path' => 'product-52.webp',
            ],
		[
                'product_id' => 52,
                'path' => 'product-52-1.webp',
            ],
		[
                'product_id' => 52,
                'path' => 'product-52-2.webp',
            ],
		[
                'product_id' => 52,
                'path' => 'product-52-3.webp',
            ],
		[
                'product_id' => 52,
                'path' => 'product-52-4.webp',
            ],
		[
                'product_id' => 53,
                'path' => 'product-53.webp',
            ],
		[
                'product_id' => 53,
                'path' => 'product-53-1.webp',
            ],
		[
                'product_id' => 53,
                'path' => 'product-53-2.webp',
            ],
		[
                'product_id' => 53,
                'path' => 'product-53-3.webp',
            ],
		[
                'product_id' => 53,
                'path' => 'product-53-4.webp',
            ],
		[
                'product_id' => 53,
                'path' => 'product-53-5.webp',
            ],
		[
                'product_id' => 53,
                'path' => 'product-53-6.webp',
            ],
		[
                'product_id' => 54,
                'path' => 'product-54.webp',
            ],
		[
                'product_id' => 54,
                'path' => 'product-54-1.webp',
            ],
		[
                'product_id' => 54,
                'path' => 'product-54-2.webp',
            ],
		[
                'product_id' => 54,
                'path' => 'product-54-3.webp',
            ],
		[
                'product_id' => 54,
                'path' => 'product-54-4.webp',
            ],
		[
                'product_id' => 54,
                'path' => 'product-54-5.webp',
            ],
		[
                'product_id' => 54,
                'path' => 'product-54-6.webp',
            ],
		[
                'product_id' => 55,
                'path' => 'product-55.webp',
            ],
		[
                'product_id' => 55,
                'path' => 'product-55-1.webp',
            ],
		[
                'product_id' => 55,
                'path' => 'product-55-2.webp',
            ],
		[
                'product_id' => 55,
                'path' => 'product-55-3.webp',
            ],
		[
                'product_id' => 55,
                'path' => 'product-55-4.webp',
            ],
		[
                'product_id' => 55,
                'path' => 'product-55-5.webp',
            ],
		[
                'product_id' => 55,
                'path' => 'product-55-6.webp',
            ],
		[
                'product_id' => 56,
                'path' => 'product-56.webp',
            ],
		[
                'product_id' => 56,
                'path' => 'product-56-1.webp',
            ],
		[
                'product_id' => 56,
                'path' => 'product-56-2.webp',
            ],
		[
                'product_id' => 56,
                'path' => 'product-56-3.webp',
            ],
		[
                'product_id' => 56,
                'path' => 'product-56-4.webp',
            ],
		[
                'product_id' => 56,
                'path' => 'product-56-5.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-1.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-2.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-3.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-4.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-5.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-6.jpg',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-7.webp',
            ],
		[
                'product_id' => 57,
                'path' => 'product-57-8.webp',
            ],
		[
                'product_id' => 58,
                'path' => 'product-58.webp',
            ],
		[
                'product_id' => 58,
                'path' => 'product-58-1.webp',
            ],
		[
                'product_id' => 58,
                'path' => 'product-58-2.webp',
            ],
		[
                'product_id' => 58,
                'path' => 'product-58-3.webp',
            ],
		[
                'product_id' => 58,
                'path' => 'product-58-4.webp',
            ],
		[
                'product_id' => 58,
                'path' => 'product-58-5.webp',
            ],
		[
                'product_id' => 58,
                'path' => 'product-5-6.webp',
            ],
		[
                'product_id' => 59,
                'path' => 'product-59.webp',
            ],
		[
                'product_id' => 59,
                'path' => 'product-59-1.webp',
            ],
		[
                'product_id' => 59,
                'path' => 'product-59-2.webp',
            ],
		[
                'product_id' => 59,
                'path' => 'product-59-3.webp',
            ],
		[
                'product_id' => 59,
                'path' => 'product-59-4.webp',
            ],
		[
                'product_id' => 59,
                'path' => 'product-59-5.webp',
            ],
		[
                'product_id' => 59,
                'path' => 'product-59-6.webp',
            ],
		[
                'product_id' => 60,
                'path' => 'product-60.webp',
            ],
		[
                'product_id' => 60,
                'path' => 'product-60-1.webp',
            ],
		[
                'product_id' => 60,
                'path' => 'product-60-2.webp',
            ],
		[
                'product_id' => 60,
                'path' => 'product-60-3.webp',
            ],
		[
                'product_id' => 60,
                'path' => 'product-60-4.webp',
            ],
		[
                'product_id' => 60,
                'path' => 'product-60-5.webp',
            ],
		[
                'product_id' => 60,
                'path' => 'product-60-6.webp',
            ],
		[
                'product_id' => 61,
                'path' => 'product-61.webp',
            ],
		[
                'product_id' => 61,
                'path' => 'product-61-1.webp',
            ],
		[
                'product_id' => 61,
                'path' => 'product-61-2.webp',
            ],
		[
                'product_id' => 61,
                'path' => 'product-61-3.webp',
            ],
		[
                'product_id' => 61,
                'path' => 'product-61-4.jpg',
            ],
		[
                'product_id' => 61,
                'path' => 'product-61-5.webp',
            ],
		[
                'product_id' => 62,
                'path' => 'product-62.webp',
            ],
		[
                'product_id' => 62,
                'path' => 'product-62-1.webp',
            ],
		[
                'product_id' => 62,
                'path' => 'product-62-2.webp',
            ],
		[
                'product_id' => 62,
                'path' => 'product-62-3.webp',
            ],
		[
                'product_id' => 62,
                'path' => 'product-62-4.webp',
            ],
		[
                'product_id' => 62,
                'path' => 'product-62-5.webp',
            ],
		[
                'product_id' => 63,
                'path' => 'product-63.webp',
            ],
		[
                'product_id' => 63,
                'path' => 'product-63-1.webp',
            ],
		[
                'product_id' => 63,
                'path' => 'product-63-2.webp',
            ],
		[
                'product_id' => 63,
                'path' => 'product-63-3.webp',
            ],
		[
                'product_id' => 63,
                'path' => 'product-63-4.webp',
            ],
		[
                'product_id' => 64,
                'path' => 'product-64.webp',
            ],
		[
                'product_id' => 64,
                'path' => 'product-64-1.webp',
            ],
		[
                'product_id' => 64,
                'path' => 'product-64-2.webp',
            ],
		[
                'product_id' => 64,
                'path' => 'product-64-3.webp',
            ],
		[
                'product_id' => 64,
                'path' => 'product-64-4.webp',
            ],
		[
                'product_id' => 65,
                'path' => 'product-65.webp',
            ],
		[
                'product_id' => 65,
                'path' => 'product-65-1.webp',
            ],
		[
                'product_id' => 65,
                'path' => 'product-65-2.webp',
            ],
		[
                'product_id' => 65,
                'path' => 'product-65-3.webp',
            ],
		[
                'product_id' => 65,
                'path' => 'product-65-4.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66-1.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66-2.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66-3.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66-4.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66-5.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66-6.webp',
            ],
		[
                'product_id' => 66,
                'path' => 'product-66-7.webp',
            ],
		[
                'product_id' => 67,
                'path' => 'product-67.webp',
            ],
		[
                'product_id' => 67,
                'path' => 'product-67-1.webp',
            ],
		[
                'product_id' => 67,
                'path' => 'product-67-2.webp',
            ],
		[
                'product_id' => 67,
                'path' => 'product-67-3.jpg',
            ],
		[
                'product_id' => 67,
                'path' => 'product-67-4.webp',
            ],
		[
                'product_id' => 67,
                'path' => 'product-67-5.webp',
            ],
		[
                'product_id' => 67,
                'path' => 'product-67-6.webp',
            ],
		[
                'product_id' => 68,
                'path' => 'product-68.png',
            ],
		[
                'product_id' => 68,
                'path' => 'product-68-1.png',
            ],
		[
                'product_id' => 68,
                'path' => 'product-68-2.webp',
            ],
		[
                'product_id' => 68,
                'path' => 'product-68-3.webp',
            ],
		[
                'product_id' => 68,
                'path' => 'product-68-4.webp',
            ],
		[
                'product_id' => 68,
                'path' => 'product-68-5.webp',
            ],
		[
                'product_id' => 69,
                'path' => 'product-69.webp',
            ],
		[
                'product_id' => 69,
                'path' => 'product-69-1.webp',
            ],
		[
                'product_id' => 69,
                'path' => 'product-69-2.webp',
            ],
		[
                'product_id' => 69,
                'path' => 'product-69-3.webp',
            ],
		[
                'product_id' => 69,
                'path' => 'product-69-4.webp',
            ],
		[
                'product_id' => 69,
                'path' => 'product-69-5.webp',
            ],
		[
                'product_id' => 69,
                'path' => 'product-69-6.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70-1.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70-2.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70-3.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70-4.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70-5.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70-6.webp',
            ],
		[
                'product_id' => 70,
                'path' => 'product-70-7.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-1.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-2.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-3.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-4.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-5.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-6.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-7.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-8.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-9.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-10.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-11.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-12.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-13.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-14.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-15.webp',
            ],
		[
                'product_id' => 71,
                'path' => 'product-71-16.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-1.png',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-2.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-3.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-4.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-5.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-6.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-7.webp',
            ],
		[
                'product_id' => 72,
                'path' => 'product-72-8.webp',
            ],
		[
                'product_id' => 73,
                'path' => 'product-73.webp',
            ],
		[
                'product_id' => 73,
                'path' => 'product-73-1.webp',
            ],
		[
                'product_id' => 73,
                'path' => 'product-73-2.webp',
            ],
		[
                'product_id' => 74,
                'path' => 'product-74.webp',
            ],
		[
                'product_id' => 74,
                'path' => 'product-74-1.webp',
            ],
		[
                'product_id' => 74,
                'path' => 'product-74-2.webp',
            ],
		[
                'product_id' => 74,
                'path' => 'product-74-3.webp',
            ],
		[
                'product_id' => 74,
                'path' => 'product-74-4.webp',
            ],
		[
                'product_id' => 75,
                'path' => 'product-75.webp',
            ],
		[
                'product_id' => 75,
                'path' => 'product-75-1.webp',
            ],
		[
                'product_id' => 75,
                'path' => 'product-75-2.webp',
            ],
		[
                'product_id' => 75,
                'path' => 'product-75-3.webp',
            ],
		[
                'product_id' => 75,
                'path' => 'product-75-4.webp',
            ],
		[
                'product_id' => 75,
                'path' => 'product-75-5.webp',
            ],
		[
                'product_id' => 75,
                'path' => 'product-75-6.webp',
            ],
		[
                'product_id' => 76,
                'path' => 'product-76.webp',
            ],
		[
                'product_id' => 76,
                'path' => 'product-76-1.webp',
            ],
		[
                'product_id' => 76,
                'path' => 'product-76-2.png',
            ],
		[
                'product_id' => 76,
                'path' => 'product-76-3.webp',
            ],
		[
                'product_id' => 77,
                'path' => 'product-77.webp',
            ],
		[
                'product_id' => 77,
                'path' => 'product-77-1.webp',
            ],
		[
                'product_id' => 77,
                'path' => 'product-77-2.webp',
            ],
		[
                'product_id' => 77,
                'path' => 'product-77-3.webp',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78.jpg',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78-1.webp',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78-2.webp',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78-3.webp',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78-4.webp',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78-5.webp',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78-6.webp',
            ],
		[
                'product_id' => 78,
                'path' => 'product-78-7.webp',
            ],
		[
                'product_id' => 79,
                'path' => 'product-79.webp',
            ],
		[
                'product_id' => 79,
                'path' => 'product-79-1.webp',
            ],
		[
                'product_id' => 79,
                'path' => 'product-79-2.webp',
            ],
		[
                'product_id' => 79,
                'path' => 'product-79-3.webp',
            ],
		[
                'product_id' => 79,
                'path' => 'product-79-4.webp',
            ],
		[
                'product_id' => 79,
                'path' => 'product-79-5.webp',
            ],
		[
                'product_id' => 79,
                'path' => 'product-79-6.webp',
            ],
		[
                'product_id' => 80,
                'path' => 'product-80.webp',
            ],
		[
                'product_id' => 80,
                'path' => 'product-80-1.webp',
            ],
		[
                'product_id' => 80,
                'path' => 'product-80-2.webp',
            ],
		[
                'product_id' => 80,
                'path' => 'product-80-3.webp',
            ],
		[
                'product_id' => 80,
                'path' => 'product-80-4.webp',
            ],
		[
                'product_id' => 80,
                'path' => 'product-80-5.webp',
            ],
		[
                'product_id' => 81,
                'path' => 'product-81.webp',
            ],
		[
                'product_id' => 81,
                'path' => 'product-81-1.webp',
            ],
		[
                'product_id' => 81,
                'path' => 'product-81-2.webp',
            ],
		[
                'product_id' => 81,
                'path' => 'product-81-3.webp',
            ],
		[
                'product_id' => 81,
                'path' => 'product-81-4.webp',
            ],
		[
                'product_id' => 82,
                'path' => 'product-82.webp',
            ],
		[
                'product_id' => 82,
                'path' => 'product-82-1.webp',
            ],
		[
                'product_id' => 82,
                'path' => 'product-82-2.webp',
            ],
		[
                'product_id' => 82,
                'path' => 'product-82-3.webp',
            ],
		[
                'product_id' => 82,
                'path' => 'product-82-4.webp',
            ],
		[
                'product_id' => 83,
                'path' => 'product-83.webp',
            ],
		[
                'product_id' => 83,
                'path' => 'product-83-1.webp',
            ],
		[
                'product_id' => 83,
                'path' => 'product-83-2.webp',
            ],
		[
                'product_id' => 83,
                'path' => 'product-83-3.webp',
            ],
		[
                'product_id' => 83,
                'path' => 'product-83-4.webp',
            ],
		[
                'product_id' => 84,
                'path' => 'product-84.webp',
            ],
		[
                'product_id' => 84,
                'path' => 'product-84-1.webp',
            ],
		[
                'product_id' => 84,
                'path' => 'product-84-2.webp',
            ],
		[
                'product_id' => 84,
                'path' => 'product-84-3.webp',
            ],
		[
                'product_id' => 84,
                'path' => 'product-84-4.webp',
            ],
		[
                'product_id' => 85,
                'path' => 'product-85.webp',
            ],
		[
                'product_id' => 85,
                'path' => 'product-85-1.webp',
            ],
		[
                'product_id' => 85,
                'path' => 'product-85-2.webp',
            ],
		[
                'product_id' => 85,
                'path' => 'product-85-3.webp',
            ],
		[
                'product_id' => 85,
                'path' => 'product-85-4.webp',
            ],
		[
                'product_id' => 86,
                'path' => 'product-86.webp',
            ],
		[
                'product_id' => 86,
                'path' => 'product-86-1.webp',
            ],
		[
                'product_id' => 86,
                'path' => 'product-86-2.webp',
            ],
		[
                'product_id' => 86,
                'path' => 'product-86-3.webp',
            ],
		[
                'product_id' => 86,
                'path' => 'product-86-4.webp',
            ],
		[
                'product_id' => 86,
                'path' => 'product-86-5.webp',
            ],
		[
                'product_id' => 86,
                'path' => 'product-86-6.webp',
            ],
		[
                'product_id' => 87,
                'path' => 'product-87.webp',
            ],
		[
                'product_id' => 87,
                'path' => 'product-87-1.webp',
            ],
		[
                'product_id' => 87,
                'path' => 'product-87-2.webp',
            ],
		[
                'product_id' => 87,
                'path' => 'product-87-3.webp',
            ],
		[
                'product_id' => 87,
                'path' => 'product-87-4.webp',
            ],
		[
                'product_id' => 87,
                'path' => 'product-87-5.webp',
            ],
		[
                'product_id' => 88,
                'path' => 'product-88.webp',
            ],
		[
                'product_id' => 88,
                'path' => 'product-88-1.webp',
            ],
		[
                'product_id' => 88,
                'path' => 'product-88-2.webp',
            ],
		[
                'product_id' => 88,
                'path' => 'product-88-3.webp',
            ],
		[
                'product_id' => 88,
                'path' => 'product-88-4.webp',
            ],
		[
                'product_id' => 89,
                'path' => 'product-89.webp',
            ],
		[
                'product_id' => 89,
                'path' => 'product-89-1.webp',
            ],
		[
                'product_id' => 89,
                'path' => 'product-89-2.webp',
            ],
		[
                'product_id' => 89,
                'path' => 'product-89-3.webp',
            ],
		[
                'product_id' => 89,
                'path' => 'product-89-4.webp',
            ],
		[
                'product_id' => 89,
                'path' => 'product-89-5.webp',
            ],
		[
                'product_id' => 90,
                'path' => 'product-90.webp',
            ],
		[
                'product_id' => 90,
                'path' => 'product-90-1.webp',
            ],
		[
                'product_id' => 90,
                'path' => 'product-90-2.webp',
            ],
		[
                'product_id' => 90,
                'path' => 'product-90-3.webp',
            ],
		[
                'product_id' => 90,
                'path' => 'product-90-4.webp',
            ],
		[
                'product_id' => 90,
                'path' => 'product-90-5.webp',
            ],
		[
                'product_id' => 91,
                'path' => 'product-91.webp',
            ],
		[
                'product_id' => 91,
                'path' => 'product-91-1.webp',
            ],
		[
                'product_id' => 91,
                'path' => 'product-91-2.webp',
            ],
		[
                'product_id' => 91,
                'path' => 'product-91-3.webp',
            ],
		[
                'product_id' => 91,
                'path' => 'product-91-4.webp',
            ],
		[
                'product_id' => 91,
                'path' => 'product-91-5.webp',
            ],
		[
                'product_id' => 92,
                'path' => 'product-92.webp',
            ],
		[
                'product_id' => 92,
                'path' => 'product-92-1.webp',
            ],
		[
                'product_id' => 92,
                'path' => 'product-92-2.webp',
            ],
		[
                'product_id' => 92,
                'path' => 'product-92-3.webp',
            ],
		[
                'product_id' => 92,
                'path' => 'product-92-4.webp',
            ],
		[
                'product_id' => 92,
                'path' => 'product-92-5.webp',
            ],
		[
                'product_id' => 93,
                'path' => 'product-93.webp',
            ],
		[
                'product_id' => 93,
                'path' => 'product-93-1.webp',
            ],
		[
                'product_id' => 93,
                'path' => 'product-93-2.webp',
            ],
		[
                'product_id' => 93,
                'path' => 'product-93-3.webp',
            ],
		[
                'product_id' => 93,
                'path' => 'product-93-4.webp',
            ],
		[
                'product_id' => 93,
                'path' => 'product-93-5.webp',
            ],
		[
                'product_id' => 94,
                'path' => 'product-94.webp',
            ],
		[
                'product_id' => 94,
                'path' => 'product-94-1.webp',
            ],
		[
                'product_id' => 94,
                'path' => 'product-94-2.webp',
            ],
		[
                'product_id' => 94,
                'path' => 'product-94-3.webp',
            ],
		[
                'product_id' => 94,
                'path' => 'product-94-4.webp',
            ],
		[
                'product_id' => 94,
                'path' => 'product-94-5.webp',
            ],
		[
                'product_id' => 95,
                'path' => 'product-95.webp',
            ],
		[
                'product_id' => 95,
                'path' => 'product-95-1.webp',
            ],
		[
                'product_id' => 95,
                'path' => 'product-95-2.webp',
            ],
		[
                'product_id' => 95,
                'path' => 'product-95-3.webp',
            ],
		[
                'product_id' => 95,
                'path' => 'product-95-4.webp',
            ],
		[
                'product_id' => 96,
                'path' => 'product-96.webp',
            ],
		[
                'product_id' => 96,
                'path' => 'product-96-1.webp',
            ],
		[
                'product_id' => 96,
                'path' => 'product-96-2.webp',
            ],
		[
                'product_id' => 96,
                'path' => 'product-96-3.webp',
            ],
		[
                'product_id' => 96,
                'path' => 'product-96-4.jpg',
            ],
		[
                'product_id' => 96,
                'path' => 'product-96-5.webp',
            ],
		[
                'product_id' => 97,
                'path' => 'product-97.webp',
            ],
		[
                'product_id' => 97,
                'path' => 'product-97-1.png',
            ],
		[
                'product_id' => 97,
                'path' => 'product-97-2.webp',
            ],
		[
                'product_id' => 97,
                'path' => 'product-97-3.webp',
            ],
		[
                'product_id' => 97,
                'path' => 'product-97-4.webp',
            ],
		[
                'product_id' => 97,
                'path' => 'product-97-5.webp',
            ],
		[
                'product_id' => 98,
                'path' => 'product-98.webp',
            ],
		[
                'product_id' => 98,
                'path' => 'product-98-1.webp',
            ],
		[
                'product_id' => 98,
                'path' => 'product-98-2.webp',
            ],
		[
                'product_id' => 98,
                'path' => 'product-98-3.webp',
            ],
		[
                'product_id' => 98,
                'path' => 'product-98-4.jpg',
            ],
		[
                'product_id' => 98,
                'path' => 'product-98-5.webp',
            ],
		[
                'product_id' => 99,
                'path' => 'product-99.webp',
            ],
		[
                'product_id' => 99,
                'path' => 'product-99-1.webp',
            ],
		[
                'product_id' => 99,
                'path' => 'product-99-2.webp',
            ],
		[
                'product_id' => 99,
                'path' => 'product-99-3.webp',
            ],
		[
                'product_id' => 99,
                'path' => 'product-99-4.webp',
            ],
		[
                'product_id' => 99,
                'path' => 'product-99-5.jpg',
            ],
		[
                'product_id' => 100,
                'path' => 'product-100.webp',
            ],
		[
                'product_id' => 100,
                'path' => 'product-100-1.webp',
            ],
		[
                'product_id' => 100,
                'path' => 'product-100-2.webp',
            ],
		[
                'product_id' => 100,
                'path' => 'product-100-3.webp',
            ],
		[
                'product_id' => 100,
                'path' => 'product-100-4.webp',
            ],
		[
                'product_id' => 100,
                'path' => 'product-100-5.webp',
            ],
		[
                'product_id' => 101,
                'path' => 'product-101.webp',
            ],
		[
                'product_id' => 101,
                'path' => 'product-101-1.webp',
            ],
		[
                'product_id' => 101,
                'path' => 'product-101-2.webp',
            ],
		[
                'product_id' => 101,
                'path' => 'product-101-3.webp',
            ],
		[
                'product_id' => 101,
                'path' => 'product-101-4.webp',
            ],
		[
                'product_id' => 101,
                'path' => 'product-101-5.webp',
            ],
		[
                'product_id' => 102,
                'path' => 'product-102.webp',
            ],
		[
                'product_id' => 102,
                'path' => 'product-102-1.webp',
            ],
		[
                'product_id' => 102,
                'path' => 'product-102-2.webp',
            ],
		[
                'product_id' => 102,
                'path' => 'product-102-3.webp',
            ],
		[
                'product_id' => 102,
                'path' => 'product-102-4.webp',
            ],
		[
                'product_id' => 102,
                'path' => 'product-102-5.webp',
            ],
		[
                'product_id' => 103,
                'path' => 'product-103.webp',
            ],
		[
                'product_id' => 103,
                'path' => 'product-103-1.webp',
            ],
		[
                'product_id' => 103,
                'path' => 'product-103-2.webp',
            ],
		[
                'product_id' => 103,
                'path' => 'product-103-3.webp',
            ],
		[
                'product_id' => 103,
                'path' => 'product-103-4.webp',
            ],
		[
                'product_id' => 103,
                'path' => 'product-103-5.webp',
            ],
		[
                'product_id' => 104,
                'path' => 'product-104.webp',
            ],
		[
                'product_id' => 104,
                'path' => 'product-104-1.webp',
            ],
		[
                'product_id' => 104,
                'path' => 'product-104-2.webp',
            ],
		[
                'product_id' => 104,
                'path' => 'product-104-3.webp',
            ],
		[
                'product_id' => 104,
                'path' => 'product-104-4.webp',
            ],
		[
                'product_id' => 104,
                'path' => 'product-104-5.webp',
            ],
		[
                'product_id' => 105,
                'path' => 'product-105.webp',
            ],
		[
                'product_id' => 105,
                'path' => 'product-105-1.webp',
            ],
		[
                'product_id' => 105,
                'path' => 'product-105-2.webp',
            ],
		[
                'product_id' => 105,
                'path' => 'product-105-3.webp',
            ],
		[
                'product_id' => 105,
                'path' => 'product-105-4.webp',
            ],
		[
                'product_id' => 105,
                'path' => 'product-105-5.webp',
            ],
		[
                'product_id' => 106,
                'path' => 'product-106.webp',
            ],
		[
                'product_id' => 106,
                'path' => 'product-106-1.webp',
            ],
		[
                'product_id' => 106,
                'path' => 'product-106-2.jpg',
            ],
		[
                'product_id' => 106,
                'path' => 'product-106-3.jpg',
            ],
		[
                'product_id' => 106,
                'path' => 'product-106-4.jpg',
            ],
		[
                'product_id' => 107,
                'path' => 'product-107.webp',
            ],
		[
                'product_id' => 107,
                'path' => 'product-107-1.webp',
            ],
		[
                'product_id' => 107,
                'path' => 'product-107-2.webp',
            ],
		[
                'product_id' => 107,
                'path' => 'product-107-3.webp',
            ],
		[
                'product_id' => 107,
                'path' => 'product-107-4.webp',
            ],
		[
                'product_id' => 107,
                'path' => 'product-107-5.webp',
            ],
		[
                'product_id' => 108,
                'path' => 'product-108.webp',
            ],
		[
                'product_id' => 108,
                'path' => 'product-108-1.webp',
            ],
		[
                'product_id' => 108,
                'path' => 'product-108-2.webp',
            ],
		[
                'product_id' => 108,
                'path' => 'product-108-3.jpg',
            ],
		[
                'product_id' => 108,
                'path' => 'product-108-4.jpg',
            ],
		[
                'product_id' => 108,
                'path' => 'product-108-5.jpg',
            ],
		[
                'product_id' => 109,
                'path' => 'product-109.webp',
            ],
		[
                'product_id' => 109,
                'path' => 'product-109-1.webp',
            ],
		[
                'product_id' => 109,
                'path' => 'product-109-2.webp',
            ],
		[
                'product_id' => 109,
                'path' => 'product-109-3.webp',
            ],
		[
                'product_id' => 109,
                'path' => 'product-109-4.webp',
            ],
		[
                'product_id' => 110,
                'path' => 'product-110.webp',
            ],
		[
                'product_id' => 110,
                'path' => 'product-110-1.webp',
            ],
		[
                'product_id' => 110,
                'path' => 'product-110-2.webp',
            ],
		[
                'product_id' => 111,
                'path' => 'product-111.webp',
            ],
		[
                'product_id' => 111,
                'path' => 'product-111-1.webp',
            ],
		[
                'product_id' => 111,
                'path' => 'product-111-2.webp',
            ],
		[
                'product_id' => 111,
                'path' => 'product-111-3.webp',
            ],
		[
                'product_id' => 112,
                'path' => 'product-112.webp',
            ],
		[
                'product_id' => 112,
                'path' => 'product-112-1.webp',
            ],
		[
                'product_id' => 112,
                'path' => 'product-112-2.webp',
            ],
		[
                'product_id' => 112,
                'path' => 'product-112-3.webp',
            ],
		[
                'product_id' => 112,
                'path' => 'product-112-4.jpg',
            ],
		[
                'product_id' => 112,
                'path' => 'product-112-5.webp',
            ],
		[
                'product_id' => 113,
                'path' => 'product-113.webp',
            ],
		[
                'product_id' => 113,
                'path' => 'product-113-1.webp',
            ],
		[
                'product_id' => 113,
                'path' => 'product-113-2.webp',
            ],
		[
                'product_id' => 113,
                'path' => 'product-113-3.webp',
            ],
		[
                'product_id' => 113,
                'path' => 'product-113-4.webp',
            ],
		[
                'product_id' => 113,
                'path' => 'product-113-5.webp',
            ],
		[
                'product_id' => 114,
                'path' => 'product-114.webp',
            ],
		[
                'product_id' => 114,
                'path' => 'product-114-1.webp',
            ],
		[
                'product_id' => 114,
                'path' => 'product-114-2.webp',
            ],
		[
                'product_id' => 114,
                'path' => 'product-114-3.webp',
            ],
		[
                'product_id' => 114,
                'path' => 'product-114-4.webp',
            ],
		[
                'product_id' => 115,
                'path' => 'product-115.webp',
            ],
		[
                'product_id' => 115,
                'path' => 'product-115-1.webp',
            ],
		[
                'product_id' => 115,
                'path' => 'product-115-2.webp',
            ],
		[
                'product_id' => 116,
                'path' => 'product-116.webp',
            ],
		[
                'product_id' => 116,
                'path' => 'product-116-1.webp',
            ],
		[
                'product_id' => 116,
                'path' => 'product-116-2.webp',
            ],
		[
                'product_id' => 116,
                'path' => 'product-116-3.webp',
            ],
		[
                'product_id' => 116,
                'path' => 'product-116-4.webp',
            ],
		[
                'product_id' => 117,
                'path' => 'product-117.webp',
            ],
		[
                'product_id' => 117,
                'path' => 'product-117-1.webp',
            ],
		[
                'product_id' => 117,
                'path' => 'product-117-2.webp',
            ],
		[
                'product_id' => 117,
                'path' => 'product-117-3.webp',
            ],
		[
                'product_id' => 117,
                'path' => 'product-117-4.webp',
            ],
		[
                'product_id' => 117,
                'path' => 'product-117-5.webp',
            ],
		[
                'product_id' => 118,
                'path' => 'product-118.webp',
            ],
		[
                'product_id' => 118,
                'path' => 'product-118-1.webp',
            ],
		[
                'product_id' => 118,
                'path' => 'product-118-2.webp',
            ],
		[
                'product_id' => 119,
                'path' => 'product-119.webp',
            ],
		[
                'product_id' => 119,
                'path' => 'product-119-1.webp',
            ],
		[
                'product_id' => 119,
                'path' => 'product-119-2.webp',
            ],
		[
                'product_id' => 119,
                'path' => 'product-119-3.webp',
            ],
		[
                'product_id' => 120,
                'path' => 'product-120.webp',
            ],
		[
                'product_id' => 120,
                'path' => 'product-120-1.webp',
            ],
		[
                'product_id' => 120,
                'path' => 'product-120-2.webp',
            ],
		[
                'product_id' => 120,
                'path' => 'product-120-3.webp',
            ],
		[
                'product_id' => 120,
                'path' => 'product-120-4.webp',
            ],
		[
                'product_id' => 120,
                'path' => 'product-120-5.webp',
            ],
		[
                'product_id' => 121,
                'path' => 'product-121.webp',
            ],
		[
                'product_id' => 121,
                'path' => 'product-121-1.webp',
            ],
		[
                'product_id' => 121,
                'path' => 'product-121-2.webp',
            ],
		[
                'product_id' => 121,
                'path' => 'product-121-3.webp',
            ],
		[
                'product_id' => 121,
                'path' => 'product-121-4.webp',
            ],
		[
                'product_id' => 121,
                'path' => 'product-121-5.webp',
            ],
		[
                'product_id' => 122,
                'path' => 'product-122.webp',
            ],
		[
                'product_id' => 122,
                'path' => 'product-122-1.webp',
            ],
		[
                'product_id' => 122,
                'path' => 'product-122-2.webp',
            ],
		[
                'product_id' => 122,
                'path' => 'product-122-3.webp',
            ],
		[
                'product_id' => 122,
                'path' => 'product-122-4.webp',
            ],
		[
                'product_id' => 122,
                'path' => 'product-122-5.webp',
            ],
		[
                'product_id' => 123,
                'path' => 'product-123.webp',
            ],
		[
                'product_id' => 123,
                'path' => 'product-123-1.webp',
            ],
		[
                'product_id' => 123,
                'path' => 'product-123-2.webp',
            ],
		[
                'product_id' => 123,
                'path' => 'product-123-3.webp',
            ],
		[
                'product_id' => 123,
                'path' => 'product-123-4.webp',
            ],
		[
                'product_id' => 123,
                'path' => 'product-123-5.webp',
            ],
		[
                'product_id' => 124,
                'path' => 'product-124.webp',
            ],
		[
                'product_id' => 124,
                'path' => 'product-124-1.webp',
            ],
		[
                'product_id' => 124,
                'path' => 'product-124-2.webp',
            ],
		[
                'product_id' => 124,
                'path' => 'product-124-3.webp',
            ],
		[
                'product_id' => 124,
                'path' => 'product-124-4.webp',
            ],
		[
                'product_id' => 125,
                'path' => 'product-125.webp',
            ],
		[
                'product_id' => 125,
                'path' => 'product-125-1.webp',
            ],
		[
                'product_id' => 125,
                'path' => 'product-125-2.webp',
            ],
		[
                'product_id' => 125,
                'path' => 'product-125-3.webp',
            ],
		[
                'product_id' => 125,
                'path' => 'product-125-4.webp',
            ],
		[
                'product_id' => 126,
                'path' => 'product-126.webp',
            ],
		[
                'product_id' => 126,
                'path' => 'product-126-1.webp',
            ],
		[
                'product_id' => 126,
                'path' => 'product-126-2.webp',
            ],
		[
                'product_id' => 126,
                'path' => 'product-126-3.webp',
            ],
		[
                'product_id' => 126,
                'path' => 'product-126-4.webp',
            ],
		[
                'product_id' => 126,
                'path' => 'product-126-5.webp',
            ],
		[
                'product_id' => 127,
                'path' => 'product-127.webp',
            ],
		[
                'product_id' => 127,
                'path' => 'product-127-1.webp',
            ],
		[
                'product_id' => 127,
                'path' => 'product-127-2.webp',
            ],
		[
                'product_id' => 127,
                'path' => 'product-127-3.webp',
            ],
		[
                'product_id' => 127,
                'path' => 'product-127-4.webp',
            ],
		[
                'product_id' => 127,
                'path' => 'product-127-5.webp',
            ],
		[
                'product_id' => 128,
                'path' => 'product-128.webp',
            ],
		[
                'product_id' => 128,
                'path' => 'product-128-1.webp',
            ],
		[
                'product_id' => 128,
                'path' => 'product-128-2.webp',
            ],
		[
                'product_id' => 128,
                'path' => 'product-128-3.webp',
            ],
		[
                'product_id' => 128,
                'path' => 'product-128-4.webp',
            ],
		[
                'product_id' => 128,
                'path' => 'product-128-5.webp',
            ],
		[
                'product_id' => 129,
                'path' => 'product-129.webp',
            ],
		[
                'product_id' => 129,
                'path' => 'product-129-1.webp',
            ],
		[
                'product_id' => 129,
                'path' => 'product-129-2.webp',
            ],
		[
                'product_id' => 129,
                'path' => 'product-129-3.webp',
            ],
		[
                'product_id' => 129,
                'path' => 'product-129-4.webp',
            ],
		[
                'product_id' => 129,
                'path' => 'product-129-5.webp',
            ],
		[
                'product_id' => 130,
                'path' => 'product-130.webp',
            ],
		[
                'product_id' => 130,
                'path' => 'product-130-1.webp',
            ],
		[
                'product_id' => 130,
                'path' => 'product-130-2.webp',
            ],
		[
                'product_id' => 130,
                'path' => 'product-130-3.webp',
            ],
		[
                'product_id' => 130,
                'path' => 'product-130-4.webp',
            ],
		[
                'product_id' => 130,
                'path' => 'product-130-5.webp',
            ],
		[
                'product_id' => 131,
                'path' => 'product-131.webp',
            ],
		[
                'product_id' => 131,
                'path' => 'product-131-1.webp',
            ],
		[
                'product_id' => 131,
                'path' => 'product-131-2.webp',
            ],
		[
                'product_id' => 131,
                'path' => 'product-131-3.webp',
            ],
		[
                'product_id' => 131,
                'path' => 'product-131-4.webp',
            ],
		[
                'product_id' => 131,
                'path' => 'product-131-5.webp',
            ],
		[
                'product_id' => 132,
                'path' => 'product-132.webp',
            ],
		[
                'product_id' => 132,
                'path' => 'product-132-1.webp',
            ],
		[
                'product_id' => 132,
                'path' => 'product-132-2.webp',
            ],
		[
                'product_id' => 132,
                'path' => 'product-132-3.webp',
            ],
		[
                'product_id' => 132,
                'path' => 'product-132-4.webp',
            ],
		[
                'product_id' => 132,
                'path' => 'product-132-5.webp',
            ],
		[
                'product_id' => 133,
                'path' => 'product-133.webp',
            ],
		[
                'product_id' => 133,
                'path' => 'product-133-1.webp',
            ],
		[
                'product_id' => 133,
                'path' => 'product-133-2.webp',
            ],
		[
                'product_id' => 133,
                'path' => 'product-133-3.webp',
            ],
		[
                'product_id' => 133,
                'path' => 'product-133-4.webp',
            ],
		[
                'product_id' => 133,
                'path' => 'product-133-5.webp',
            ],
		[
                'product_id' => 134,
                'path' => 'product-134.webp',
            ],
		[
                'product_id' => 134,
                'path' => 'product-134-1.webp',
            ],
		[
                'product_id' => 134,
                'path' => 'product-134-2.webp',
            ],
		[
                'product_id' => 134,
                'path' => 'product-134-3.jpg',
            ],
		[
                'product_id' => 134,
                'path' => 'product-134-4.webp',
            ],
		[
                'product_id' => 134,
                'path' => 'product-134-5.webp',
            ],
		[
                'product_id' => 135,
                'path' => 'product-135.webp',
            ],
		[
                'product_id' => 135,
                'path' => 'product-135-1.webp',
            ],
		[
                'product_id' => 135,
                'path' => 'product-135-2.webp',
            ],
		[
                'product_id' => 135,
                'path' => 'product-135-3.webp',
            ],
		[
                'product_id' => 136,
                'path' => 'product-136.webp',
            ],
		[
                'product_id' => 136,
                'path' => 'product-136-1.webp',
            ],
		[
                'product_id' => 136,
                'path' => 'product-136-2.webp',
            ],
		[
                'product_id' => 136,
                'path' => 'product-136-3.webp',
            ],
		[
                'product_id' => 137,
                'path' => 'product-137.webp',
            ],
		[
                'product_id' => 137,
                'path' => 'product-137-1.webp',
            ],
		[
                'product_id' => 137,
                'path' => 'product-137-2.webp',
            ],
		[
                'product_id' => 137,
                'path' => 'product-137-3.webp',
            ],
		[
                'product_id' => 137,
                'path' => 'product-137-4.webp',
            ],
		[
                'product_id' => 138,
                'path' => 'product-138.webp',
            ],
		[
                'product_id' => 138,
                'path' => 'product-138-1.webp',
            ],
		[
                'product_id' => 138,
                'path' => 'product-138-2.jpg',
            ],
		[
                'product_id' => 138,
                'path' => 'product-138-3.webp',
            ],
		[
                'product_id' => 138,
                'path' => 'product-138-4.webp',
            ],
		[
                'product_id' => 139,
                'path' => 'product-139.webp',
            ],
		[
                'product_id' => 139,
                'path' => 'product-139-1.webp',
            ],
		[
                'product_id' => 139,
                'path' => 'product-139-2.webp',
            ],
		[
                'product_id' => 139,
                'path' => 'product-139-3.jpg',
            ],
		[
                'product_id' => 140,
                'path' => 'product-140.webp',
            ],
		[
                'product_id' => 141,
                'path' => 'product-141.webp',
            ],
		[
                'product_id' => 141,
                'path' => 'product-141-1.webp',
            ],
		[
                'product_id' => 141,
                'path' => 'product-141-2.webp',
            ],
		[
                'product_id' => 141,
                'path' => 'product-141-3.webp',
            ],
		[
                'product_id' => 141,
                'path' => 'product-141-4.webp',
            ],
		[
                'product_id' => 141,
                'path' => 'product-141-5.webp',
            ],
		[
                'product_id' => 142,
                'path' => 'product-142.webp',
            ],
		[
                'product_id' => 142,
                'path' => 'product-142-1.webp',
            ],
		[
                'product_id' => 142,
                'path' => 'product-142-2.webp',
            ],
		[
                'product_id' => 142,
                'path' => 'product-142-3.webp',
            ],
		[
                'product_id' => 142,
                'path' => 'product-142-4.webp',
            ],
		[
                'product_id' => 142,
                'path' => 'product-142-5.webp',
            ],
		[
                'product_id' => 143,
                'path' => 'product-143.webp',
            ],
		[
                'product_id' => 143,
                'path' => 'product-143-1.webp',
            ],
		[
                'product_id' => 143,
                'path' => 'product-143-2.webp',
            ],
		[
                'product_id' => 143,
                'path' => 'product-143-3.webp',
            ],
		[
                'product_id' => 143,
                'path' => 'product-143-4.webp',
            ],
		[
                'product_id' => 143,
                'path' => 'product-143-5.webp',
            ],
		[
                'product_id' => 144,
                'path' => 'product-144.webp',
            ],
		[
                'product_id' => 144,
                'path' => 'product-144-1.webp',
            ],
		[
                'product_id' => 144,
                'path' => 'product-144-2.webp',
            ],
		[
                'product_id' => 144,
                'path' => 'product-144-3.webp',
            ],
		[
                'product_id' => 144,
                'path' => 'product-144-4.webp',
            ],
		[
                'product_id' => 144,
                'path' => 'product-144-5.webp',
            ],
		[
                'product_id' => 145,
                'path' => 'product-145.webp',
            ],
		[
                'product_id' => 145,
                'path' => 'product-145-1.webp',
            ],
		[
                'product_id' => 145,
                'path' => 'product-145-2.webp',
            ],
		[
                'product_id' => 145,
                'path' => 'product-145-3.webp',
            ],
		[
                'product_id' => 145,
                'path' => 'product-145-4.webp',
            ],
		[
                'product_id' => 145,
                'path' => 'product-145-5.webp',
            ],
		[
                'product_id' => 146,
                'path' => 'product-146.webp',
            ],
		[
                'product_id' => 146,
                'path' => 'product-146-1.webp',
            ],
		[
                'product_id' => 146,
                'path' => 'product-146-2.webp',
            ],
		[
                'product_id' => 146,
                'path' => 'product-146-3.webp',
            ],
		[
                'product_id' => 146,
                'path' => 'product-146-4.webp',
            ],
		[
                'product_id' => 146,
                'path' => 'product-146-5.webp',
            ],
		[
                'product_id' => 147,
                'path' => 'product-147.webp',
            ],
		[
                'product_id' => 147,
                'path' => 'product-147-1.webp',
            ],
		[
                'product_id' => 147,
                'path' => 'product-147-2.webp',
            ],
		[
                'product_id' => 147,
                'path' => 'product-147-3.webp',
            ],
		[
                'product_id' => 148,
                'path' => 'product-148.webp',
            ],
		[
                'product_id' => 148,
                'path' => 'product-148-1.png',
            ],
		[
                'product_id' => 148,
                'path' => 'product-148-2.webp',
            ],
		[
                'product_id' => 148,
                'path' => 'product-148-3.webp',
            ],
		[
                'product_id' => 149,
                'path' => 'product-149.webp',
            ],
		[
                'product_id' => 149,
                'path' => 'product-149-1.webp',
            ],
		[
                'product_id' => 149,
                'path' => 'product-149-2.webp',
            ],
		[
                'product_id' => 150,
                'path' => 'product-150.webp',
            ],
		[
                'product_id' => 150,
                'path' => 'product-150-1.webp',
            ],
		[
                'product_id' => 150,
                'path' => 'product-150-2.webp',
            ],
		[
                'product_id' => 150,
                'path' => 'product-150-3.webp',
            ],
		[
                'product_id' => 151,
                'path' => 'product-151.webp',
            ],
		[
                'product_id' => 151,
                'path' => 'product-151-1.webp',
            ],
		[
                'product_id' => 151,
                'path' => 'product-151-2.webp',
            ],
		[
                'product_id' => 151,
                'path' => 'product-151-3.webp',
            ],
		[
                'product_id' => 152,
                'path' => 'product-152.webp',
            ],
		[
                'product_id' => 152,
                'path' => 'product-152-1.webp',
            ],
		[
                'product_id' => 152,
                'path' => 'product-152-2.webp',
            ],
		[
                'product_id' => 152,
                'path' => 'product-152-3.webp',
            ],
		[
                'product_id' => 153,
                'path' => 'product-153.webp',
            ],
		[
                'product_id' => 153,
                'path' => 'product-153-1.webp',
            ],
		[
                'product_id' => 153,
                'path' => 'product-153-2.webp',
            ],
		[
                'product_id' => 153,
                'path' => 'product-153-3.webp',
            ],
		[
                'product_id' => 153,
                'path' => 'product-153-4.webp',
            ],
		[
                'product_id' => 154,
                'path' => 'product-154.webp',
            ],
		[
                'product_id' => 154,
                'path' => 'product-154-1.webp',
            ],
		[
                'product_id' => 154,
                'path' => 'product-154-2.webp',
            ],
		[
                'product_id' => 154,
                'path' => 'product-154-3.webp',
            ],
		[
                'product_id' => 154,
                'path' => 'product-154-4.webp',
            ],
		[
                'product_id' => 155,
                'path' => 'product-155.webp',
            ],
		[
                'product_id' => 155,
                'path' => 'product-155-1.webp',
            ],
		[
                'product_id' => 155,
                'path' => 'product-155-2.webp',
            ],
		[
                'product_id' => 155,
                'path' => 'product-155-3.webp',
            ],
		[
                'product_id' => 155,
                'path' => 'product-155-4.webp',
            ],
		[
                'product_id' => 156,
                'path' => 'product-156.webp',
            ],
		[
                'product_id' => 156,
                'path' => 'product-156-1.webp',
            ],
		[
                'product_id' => 156,
                'path' => 'product-156-2.webp',
            ],
		[
                'product_id' => 156,
                'path' => 'product-156-3.webp',
            ],
		[
                'product_id' => 157,
                'path' => 'product-157.webp',
            ],
		[
                'product_id' => 157,
                'path' => 'product-157-1.webp',
            ],
		[
                'product_id' => 157,
                'path' => 'product-157-2.webp',
            ],
		[
                'product_id' => 157,
                'path' => 'product-157-3.webp',
            ],
		[
                'product_id' => 157,
                'path' => 'product-157-4.webp',
            ],
		[
                'product_id' => 158,
                'path' => 'product-158.webp',
            ],
		[
                'product_id' => 158,
                'path' => 'product-158-1.webp',
            ],
		[
                'product_id' => 158,
                'path' => 'product-158-2.webp',
            ],
		[
                'product_id' => 159,
                'path' => 'product-159.webp',
            ],
		[
                'product_id' => 159,
                'path' => 'product-159-1.webp',
            ],
		[
                'product_id' => 159,
                'path' => 'product-159-2.webp',
            ],
		[
                'product_id' => 159,
                'path' => 'product-159-3.webp',
            ],
		[
                'product_id' => 159,
                'path' => 'product-159-4.webp',
            ],
		[
                'product_id' => 160,
                'path' => 'product-160.webp',
            ],
		[
                'product_id' => 160,
                'path' => 'product-160-1.webp',
            ],
		[
                'product_id' => 160,
                'path' => 'product-160-2.webp',
            ],
		[
                'product_id' => 160,
                'path' => 'product-160-3.webp',
            ],
		[
                'product_id' => 160,
                'path' => 'product-160-4.webp',
            ],
		[
                'product_id' => 161,
                'path' => 'product-161.webp',
            ],
		[
                'product_id' => 161,
                'path' => 'product-161-1.webp',
            ],
		[
                'product_id' => 161,
                'path' => 'product-161-2.webp',
            ],
		[
                'product_id' => 161,
                'path' => 'product-161-3.webp',
            ],
		[
                'product_id' => 161,
                'path' => 'product-161-4.webp',
            ],
		[
                'product_id' => 162,
                'path' => 'product-162.webp',
            ],
		[
                'product_id' => 162,
                'path' => 'product-162-1.webp',
            ],
		[
                'product_id' => 162,
                'path' => 'product-162-2.webp',
            ],
		[
                'product_id' => 162,
                'path' => 'product-162-3.webp',
            ],
		[
                'product_id' => 162,
                'path' => 'product-162-4.webp',
            ],
		[
                'product_id' => 163,
                'path' => 'product-163.webp',
            ],
		[
                'product_id' => 163,
                'path' => 'product-163-1.webp',
            ],
		[
                'product_id' => 163,
                'path' => 'product-163-2.webp',
            ],
		[
                'product_id' => 163,
                'path' => 'product-163-3.jpg',
            ],
		[
                'product_id' => 164,
                'path' => 'product-164.webp',
            ],
		[
                'product_id' => 164,
                'path' => 'product-164-1.webp',
            ],
		[
                'product_id' => 164,
                'path' => 'product-164-2.webp',
            ],
		[
                'product_id' => 164,
                'path' => 'product-164-3.webp',
            ],
		[
                'product_id' => 164,
                'path' => 'product-164-4.webp',
            ],
		[
                'product_id' => 165,
                'path' => 'product-165.webp',
            ],
		[
                'product_id' => 165,
                'path' => 'product-165-1.webp',
            ],
		[
                'product_id' => 165,
                'path' => 'product-165-2.webp',
            ],
		[
                'product_id' => 165,
                'path' => 'product-165-3.jpg',
            ],
		[
                'product_id' => 165,
                'path' => 'product-165-4.jpg',
            ],
		[
                'product_id' => 166,
                'path' => 'product-166.webp',
            ],
		[
                'product_id' => 166,
                'path' => 'product-166-1.webp',
            ],
		[
                'product_id' => 166,
                'path' => 'product-166-2.webp',
            ],
		[
                'product_id' => 166,
                'path' => 'product-166-3.webp',
            ],
		[
                'product_id' => 167,
                'path' => 'product-167.webp',
            ],
		[
                'product_id' => 167,
                'path' => 'product-167-1.webp',
            ],
		[
                'product_id' => 167,
                'path' => 'product-167-2.jpg',
            ],
		[
                'product_id' => 167,
                'path' => 'product-167-3.webp',
            ],
		[
                'product_id' => 167,
                'path' => 'product-167-4.webp',
            ],
		[
                'product_id' => 168,
                'path' => 'product-168.webp',
            ],
		[
                'product_id' => 168,
                'path' => 'product-168-1.webp',
            ],
		[
                'product_id' => 168,
                'path' => 'product-168-2.webp',
            ],
		[
                'product_id' => 168,
                'path' => 'product-168-3.webp',
            ],
		[
                'product_id' => 168,
                'path' => 'product-168-4.webp',
            ],
		[
                'product_id' => 169,
                'path' => 'product-169.webp',
            ],
		[
                'product_id' => 169,
                'path' => 'product-169-1.webp',
            ],
		[
                'product_id' => 169,
                'path' => 'product-169-2.webp',
            ],
		[
                'product_id' => 169,
                'path' => 'product-169-3.webp',
            ],
		[
                'product_id' => 169,
                'path' => 'product-169-4.webp',
            ],
		[
                'product_id' => 170,
                'path' => 'product-170.webp',
            ],
		[
                'product_id' => 170,
                'path' => 'product-170-1.webp',
            ],
		[
                'product_id' => 170,
                'path' => 'product-170-2.webp',
            ],
		[
                'product_id' => 170,
                'path' => 'product-170-3.webp',
            ],
		[
                'product_id' => 170,
                'path' => 'product-170-4.webp',
            ],
		[
                'product_id' => 171,
                'path' => 'product-171.webp',
            ],
		[
                'product_id' => 171,
                'path' => 'product-171-1.webp',
            ],
		[
                'product_id' => 171,
                'path' => 'product-171-2.webp',
            ],
		[
                'product_id' => 171,
                'path' => 'product-171-3.webp',
            ],
		[
                'product_id' => 171,
                'path' => 'product-171-4.webp',
            ],
		[
                'product_id' => 172,
                'path' => 'product-172.webp',
            ],
		[
                'product_id' => 172,
                'path' => 'product-172-1.webp',
            ],
		[
                'product_id' => 172,
                'path' => 'product-172-2.webp',
            ],
		[
                'product_id' => 172,
                'path' => 'product-172-3.webp',
            ],
		[
                'product_id' => 172,
                'path' => 'product-172-4.webp',
            ]
        ]);

        DB::table('rooms')->insert([
            [
                'id' => 1,
                'name' => 'PHÒNG KHÁCH - living room',
		    'image' => 'slider-1.webp',
            'link' => 'living_room'
            ],
            [
                'id' => 2,
                'name' => 'PHÒNG NGỦ - bedroom',
		    'image' => 'slider-2.webp',
            'link' => 'bed_room'
            ],
		  [
                'id' => 3,
                'name' => 'BẾP & PHÒNG ĂN - kitchen room',
		    'image' => 'slider-3.webp',
            'link' => 'kitchen_room'
            ],
		  [
                'id' => 4,
                'name' => 'PHÒNG LÀM VIỆC - home office',
		    'image' => 'slider-4.webp',
            'link' => 'home_office'
            ],
		  [
                'id' => 5,
                'name' => 'PHÒNG TẮM - bathroom',
		    'image' => 'slider-5.webp',
            'link' => 'bath_room'
            ]
        ]);

    }
}
