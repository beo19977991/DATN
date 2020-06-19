<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $fillable= [
        'title',
        'start_time',
        'end_time',
    ];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
