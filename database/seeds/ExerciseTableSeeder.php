<?php

use Illuminate\Database\Seeder;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            ['idUser'=>'1','idExerciseType'=>'2','title'=>'Neck','preview'=>'Neck','video'=>'neck.mp4'],
        ]);
    }
}
