<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfSchedule extends Model
{
    protected $table="type_of_schedules";

    protected $fillable=[
        'tyOfScheduleName',
    ];
}
