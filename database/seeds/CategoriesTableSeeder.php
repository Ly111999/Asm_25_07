<?php

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
        //
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'IPhone',
                'description'=>'Hàng mới ',
                'image'=>'http://streaming1.danviet.vn/upload/4-2017/images/2017-11-08/Bo-anh-can-canh-dep-nhat-ve-sieu-pham-iPhone-X-iphone3-1510111150-width660height440.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Samsung',
                'description'=>'Hàng chất lượng',
                'image'=>'http://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/Samsung_Galaxy_J7_Pro/Samsung_Galaxy_J7_Pro_L_1.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Laptop',
                'description'=>'Hàng mới',
                'image'=>'https://img-us1.asus.com/A/show/AW000706/2017/1213/AM0000001/201712AM130000001_15131261920623310015390.jpg'
            ],
            [
                'id'=>4,
                'name'=>'desktop computer',
                'description'=>'Hàng chất lượng',
                'image'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5228/5228108_sd.jpg;maxHeight=333;maxWidth=333'
            ],
            [
                'id'=>5,
                'name'=>'Macbook',
                'description'=>'Hàng mới',
                'image'=>'https://icdn2.digitaltrends.com/image/macbook-pro-2016-keyboard-1500x1000.jpg?ver=1'
            ],

        ]);
    }
}
