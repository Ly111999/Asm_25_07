<?php

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
        //
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'IPhone6',
                'price' => 10000000,
                'description' => 'Hàng mới ',
                'image' => 'http://streaming1.danviet.vn/upload/4-2017/images/2017-11-08/Bo-anh-can-canh-dep-nhat-ve-sieu-pham-iPhone-X-iphone3-1510111150-width660height440.jpg',
                'categoryId' => 1
            ],
            [
                'id' => 2,
                'name' => 'IPhoneX',
                'price' => 10000000,
                'description' => 'Hàng chất lượng',
                'image' => 'https://cdn.shopify.com/s/files/1/2284/8371/products/5s_3_b752c9cf-cc42-4175-b92f-cadf2431928b_800x.jpg?v=1527385231',
                'categoryId' => 1

            ],
            [
                'id' => 3,
                'name' => 'Samsung 1',
                'price' => 10000000,
                'description' => 'Hàng mới',
                'image' => 'http://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/Samsung_Galaxy_J7_Pro/Samsung_Galaxy_J7_Pro_L_1.jpg',
                'categoryId' => 2

            ],
            [
                'id' => 4,
                'name' => 'Samsung 2',
                'price' => 1000000,
                'description' => 'Hàng chất lượng',
                'image' => 'https://s7d2.scene7.com/is/image/SamsungUS/Note8-Front-S-Pen-Midnight-Black-1?$product-details-jpg$',
                'categoryId' => 1

            ],
            [
                'id' => 5,
                'name' => 'Samsung 3',
                'price'=>16000000,
                'description' => 'Hàng mới',
                'image' => 'https://images.samsung.com/is/image/samsung/p5/in/smartphones/PCD_Blue.png?$ORIGIN_PNG$',
                'categoryId' => 1

            ],
            [
                'id' => 6,
                'name' => 'IPhone 7',
                'price'=>16000000,
                'description' => 'Hàng mới',
                'image' => 'https://cdn.pixabay.com/photo/2018/05/24/21/40/iphone-x-3427746_960_720.jpg',
                'categoryId' => 1

            ],
            [
                'id' => 7,
                'name' => 'IPhone 8',
                'price'=>16000000,
                'description' => 'Hàng mới',
                'image' => 'https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/Hoa/092017/22trentayiphonex/tren-tay-i-phone-x-2.jpg',
                'categoryId' => 1

            ],
            [
                'id' => 8,
                'name' => 'Iphone 6s',
                'price'=>160000000,
                'description' => 'Hàng mới',
                'image' => 'https://image.thanhnien.vn/1600/uploaded/nthanhluan/2015_09_30/6s-1_purj.jpg',
                'categoryId' => 1

            ],
            [
                'id' => 9,
                'name' => 'Laptop 1',
                'price'=>260000000,
                'description' => 'Hàng mới',
                'image' => 'https://cdn2.harveynorman.com.au/media/catalog/product/cache/21/image/992x558/9df78eab33525d08d6e5fb8d27136e95/1/x/1xe59pa.jpg',
                'categoryId' => 3

            ],
            [
                'id' => 10,
                'name' => 'desktop computer 1',
                'price'=>260000000,
                'description' => 'Hàng mới',
                'image' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5228/5228108_sd.jpg;maxHeight=333;maxWidth=333',
                'categoryId' => 4

            ],
            [
                'id' => 11,
                'name' => 'Laptop 3',
                'price'=>260000000,
                'description' => 'Hàng mới',
                'image' => 'https://cdn4.tgdd.vn/Products/Images/44/158019/hp-15-bs641tu-n3710-3mt73pa-450-300-400x400.jpg',
                'categoryId' => 3

            ],
            [
                'id' => 12,
                'name' => 'Laptop 4',
                'price'=>260000000,
                'description' => 'Hàng mới',
                'image' => 'https://img-us1.asus.com/A/show/AW000706/2017/1213/AM0000001/201712AM130000001_15131261920623310015390.jpg',
                'categoryId' => 3

            ],
            [
                'id' => 13,
                'name' => 'desktop computer 2',
                'price'=>260000000,
                'description' => 'Hàng mới',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/71jc3OqSRdL._SL1500_.jpg',
                'categoryId' => 4

            ],
            [
                'id' => 14,
                'name' => 'Laptop 6',
                'price'=>260000000,
                'description' => 'Hàng mới',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsspjNrq57CCiQIz3x-jH5bfqAfyn3kH5HlCOayqPgW7I_Kn4X',
                'categoryId' => 3

            ],
            [
                'id' => 15,
                'name' => 'MacBook ',
                'price'=>260000000,
                'description' => 'Hàng mới',
                'image' => 'https://5.imimg.com/data5/TG/BQ/MY-41250311/apple-macbook-laptop-500x500.jpg',
                'categoryId' => 5

            ],
            [
                'id' => 16,
                'name' => 'Samsung s9',
                'price'=>20000000,
                'description' => 'Hàng mới',
                'image' => 'https://cdn.fptshop.com.vn/Uploads/Thumbs/2018/2/26/636552329323936581_1o.png',
                'categoryId' => 2
            ],
            [
                'id' => 17,
                'name' => 'MacBook ',
                'price'=>20000000,
                'description' => 'Hàng mới',
                'image' => 'https://icdn2.digitaltrends.com/image/macbook-pro-2016-keyboard-1500x1000.jpg?ver=1',
                'categoryId' => 5

            ],
            [
                'id' => 18,
                'name' => 'Samsung J7',
                'price'=>20000000,
                'description' => 'Hàng mới',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/71H-orPSULL._SY445_.jpg',
                'categoryId' => 2

            ],
            [
                'id' => 19,
                'name' => 'Samsung S8 PLUS',
                'price'=>20000000,
                'description' => 'Hàng mới',
                'image' => 'https://d1ibm7nofgdn3g.cloudfront.net/samsung-galaxy-s8-plus-4gb-64gb-rose-pink-intl-dccb6a9654aef91605ecac65ec153ec4.jpg',
                'categoryId' => 2

            ],
            [
                'id' => 20,
                'name' => 'Samsung J3',
                'price'=>20000000,
                'description' => 'Hàng mới',
                'image' => 'https://md4.pricebaba.com/images/product/mobile/5518/samsung-galaxy-j3-pro-raw.jpg',
                'categoryId' => 2

            ]
        ]);

    }
}
