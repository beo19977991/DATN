<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeExercise extends Model
{
    protected $table="type_exercises";

    protected $fillable =[
        'typeExerciseName',
    ];
}
