<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "cards";

    protected $fillable = [
        'startTime',
        'endTime',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','idUser','id');
    }
}
