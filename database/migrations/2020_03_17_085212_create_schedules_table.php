<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->integer('idTypeExerciseMonday');
            $table->integer('idTypeExerciseTuesday');
            $table->integer('idTypeExerciseWednesday');
            $table->integer('idTypeExerciseThursday');
            $table->integer('idTypeExerciseFriday');
            $table->integer('idTypeExerciseSaturday');
            $table->integer('idTypeExerciseSunday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
