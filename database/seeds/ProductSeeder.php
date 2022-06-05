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
                 
            'name'=>'sony',
            'price'=>'200',
            'category' =>"TV",
            'description' =>"lorem ipsum",
            'gallery' =>"https://www.tradeinn.com/f/13819/138192974/sony-tv-kd43x81j-43-4k-led.jpg",
        

        ]);
    }
}
