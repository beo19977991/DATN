<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeExercise extends Model
{
    protected $table="type_exercises";

    protected $fillable =[
        'typeExerciseName',
    ];
    public function exercise()
    {
        return $this->hasMany('App\Exercise','idExerciseType','id');
    }
}
