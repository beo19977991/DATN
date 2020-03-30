<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedules";

    protected $casts =[
        'body'=>'array',
    ];
    protected $fillable= [
        'idUser',
        'idTypeSchedule',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','idUser','id');
    }
    public function typeSchedule()
    {
        return $this->belongsTo('App\TypeOfSchedule','idTypeSchedule','id');
    }
    public function typeExercise()
    {
        return $this->hasMany('App\TypeExercise');
    }
}
