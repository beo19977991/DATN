<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
        //$this->call(PostTableSeeder::class);
        //$this->call(TypeExerciseTableSeeder::class);
        //$this->call(ExerciseTableSeeder::class);
        //$this->call(CourseTableSeeder::class);
        //$this->call(TypeProductTableSeeder::class);
        //$this->call(ProductTableSeeder::class);
        //$this->call(TypeScheduleTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);
    }
}
