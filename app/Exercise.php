<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = "exercises";
    protected $fillable =[
        'title',
        'preview',
        'video',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','idUser','id');
    }
    public function typeExercise()
    {
        return $this->hasOne('App\TypeExercise','idExerciseType','id');
    }
}
