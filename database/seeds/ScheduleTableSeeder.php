<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[            
            "0"=>[2,3,4],
            "1"=>[3,5],
            "2"=>[4,6],
            "3"=>[5],
            "4"=>[6],
            "5"=>[7],
            "6"=>[]
        ];
        DB::table('schedules')->insert([
            [
                'idUser'=>9,
                'idTypeSchedule'=>1,
                'body'=>json_encode($data),
            ]
        ]);
    }
}
