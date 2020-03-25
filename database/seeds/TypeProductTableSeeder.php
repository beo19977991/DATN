<?php

use Illuminate\Database\Seeder;

class TypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_products')->insert([
            ['typeProductName'=>'Weight'],
            ['typeProductName'=>'Gloves'],
            ['typeProductName'=>'Bodybuilding Supplements'],
        ]);
    }
}
