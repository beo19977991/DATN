<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            ['idUser'=>8,'courseName'=>'Students','time'=>'3 month','price'=>1500.00,'discount'=>0.2],
            ['idUser'=>8,'courseName'=>'Business','time'=>'6 month','price'=>4500.00,'discount'=>0.2]
        ]);
    }
}
