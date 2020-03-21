<?php

use Illuminate\Database\Seeder;

class TypeExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_exercises')->insert([
            ['typeExerciseName'=>'Neck'],
            ['typeExerciseName'=>'Shoulder'],
            ['typeExerciseName'=>'Biceps'],
            ['typeExerciseName'=>'Triceps'],
            ['typeExerciseName'=>'Forearms'],
            ['typeExerciseName'=>'Back'],
            ['typeExerciseName'=>'Chest'],
            ['typeExerciseName'=>'Abs'],
            ['typeExerciseName'=>'Thigh'],
            ['typeExerciseName'=>'Calves '],
            ]);
    }
}
