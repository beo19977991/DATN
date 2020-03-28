<?php

use Illuminate\Database\Seeder;

class TypeScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_schedules')->insert([
            ['typeOfScheduleName'=>'Body Building'],
            ['typeOfScheduleName'=>'Fitness'],
        ]);
    }
}
