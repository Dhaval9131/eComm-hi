<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'samsung',
            'price'=>'10000',
            'decscription'=>'Smart phone with 8gb Ram',
            'cateogry'=>'Electronics',
            'gallary'=>'https://www.oneplus.in/phone/compare',

        ]);
        DB::table('products')->insert([
            'name'=>'samsung',
            'price'=>'100000',
            'decscription'=>'Smart tv with 4khd',
            'cateogry'=>'Electronics',
            'gallary'=>'https://www.samsung.com/in/tvs/uhd-4k-tv/aue60-uhd-4k-smart-tv-2021-55-inch-ua55aue60aklxl/',

        ]);
        DB::table('products')->insert([
            'name'=>'oneplus',
            'price'=>'45000',
            'decscription'=>'Smart phone with 8gb Ram',
            'cateogry'=>'Electronics',
            'gallary'=>'https://www.amazon.in/OnePlus-inches-Ready-Android-32Y1/dp/B08B42LWKN/ref=asc_df_B08B42LWKN/?tag=googleshopdes-21&linkCode=df0&hvadid=396985246257&hvpos=&hvnetw=g&hvrand=10871328001073935260&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9303679&hvtargid=pla-926514500080&psc=1&ext_vrnc=hi',

        ]);
        DB::table('products')->insert([
            'name'=>'Nokia',
            'price'=>'30000',
            'decscription'=>'Smart phone with 4gb Ram',
            'cateogry'=>'Electronics',
            'gallary'=>'https://www.amazon.in/Nokia-G20-Smartphone-4G-Storage/dp/B09878S5FX/ref=sr_1_2?crid=34GJ6G78USI0R&dchild=1&keywords=nokia+smartphones&qid=1630001298&s=electronics&sprefix=nokia%2Celectronics%2C305&sr=1-2',

        ]);
    }
}
