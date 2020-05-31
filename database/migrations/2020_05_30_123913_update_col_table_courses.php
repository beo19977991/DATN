<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColTableCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'idUSer',
                'courseName',
                'time',
            ]);
            $table->integer('staff_id')->unsigned();
            $table->integer('trainer_id')->unsigned();
            $table->string('course_name');
            $table->json('member');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('staff_id','trainer_id','course_name','member','start_time','end_time');
        });
    }
}
