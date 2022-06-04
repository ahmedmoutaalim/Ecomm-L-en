<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                 
            'name'=>'samsung',
            'price'=>'200',
            'category' =>"mobile",
            'description' =>"lorem ipsum",
            'gallery' =>"file:///C:/Users/Youcode/Downloads/001_Galaxy_A53_5G_black_front.jpg",
        
        
        ]);
    }
}
