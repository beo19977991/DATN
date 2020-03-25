<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";

    protected $fillable= [
        'idUSer',
        'courseName',
        'time',
        'price',
        'discount',
    ];


    public function user()
    {
        return $this->belongsTo('App\User','idUser','id');
    }
}
