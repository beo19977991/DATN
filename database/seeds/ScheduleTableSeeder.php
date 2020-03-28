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
        DB::table('schedules')->insert([
            ['idUser'=>9,'idTypeExerciseMonday'=>8,'idTypeExerciseTuesday'=>7,'idTypeExerciseWednesday'=>6,'idTypeExerciseThursday'=>9,'idTypeExerciseFriday'=>11,'idTypeExerciseSaturday'=>4,'idTypeExerciseSunday'=>12,'idTypeSchedule'=>1],
            ['idUser'=>8,'idTypeExerciseMonday'=>9,'idTypeExerciseTuesday'=>8,'idTypeExerciseWednesday'=>11,'idTypeExerciseThursday'=>12,'idTypeExerciseFriday'=>7,'idTypeExerciseSaturday'=>5,'idTypeExerciseSunday'=>6,'idTypeSchedule'=>1]
        ]);
    }
}
