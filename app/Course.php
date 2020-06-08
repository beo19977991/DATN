<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";

    protected $fillable= [
        'staff_id',
        'trainer_id',
        'class_name',
        'body',
        'photo',
        'price',
        'member',
        'start_time',
        'end_time',
    ];

    public function staff()
    {
        return $this->belongsTo('App\User','staff_id','id');
    }
    public function trainer()
    {
        return $this->belongsTo('App\User','trainer_id','id');
    }
    public function customer()
    {
        return $this->hasMany('App\User');
    }
}
