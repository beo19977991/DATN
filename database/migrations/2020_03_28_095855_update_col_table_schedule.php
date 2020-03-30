<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColTableSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropColumn([
                'idTypeExerciseMonday',
                'idTypeExerciseTuesday',
                'idTypeExerciseWednesday',
                'idTypeExerciseThursday',
                'idTypeExerciseFriday',
                'idTypeExerciseSaturday',
                'idTypeExerciseSunday'
            ]);
            $table->json('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropColumn('body');
        });
    }
}
