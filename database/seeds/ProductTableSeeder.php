<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['idProductType'=>'3','productName'=>'Whey Gold Standard 5lbs','preview'=>'Producer:Optimun Nutrition, Number of uses:73,Uses:Muscle gain','photo'=>'upload/product/whey-gold-5lbs.jpg','price'=>1450],
            ['idProductType'=>'5','productName'=>'Shirt Body Gym Junky','preview'=>'For Man','photo'=>'upload/product/shirt-body-gym.jpg','price'=>320],
        ]);
    }
}
